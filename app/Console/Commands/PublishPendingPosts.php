<?php

namespace App\Console\Commands;

use App\Enums\PostStatusType;
use App\Models\Post;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class PublishPendingPosts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:publishpendingposts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'As notícias pendentes serão publicadas de acordo com sua data';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        try {
            $posts = Post::where('status', PostStatusType::PENDING)
                ->whereDate('created_at', '<=', now())
                ->get(['id', 'status']);

            if ($posts->count()) {
                Log::info('Notícias encontrados: '.$posts);
            }

            foreach ($posts as $post) {
                $post->status = PostStatusType::PUBLISHED;
                $post->save();

                Log::info('A notícia de id: '.$post->id.' foi marcada como publicada');
            }
        }catch (\Exception $exception) {
            Log::info('Falha ao rodar command:publishpendingposts: '.$exception->getMessage());
        }
    }
}
