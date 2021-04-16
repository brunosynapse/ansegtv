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
                ->get(['id', 'status', 'highlight_position_scheduled', 'highlight_position']);

            if ($posts->count()) {
                Log::channel('publish_pending_posts')->info('Notícias pendentes: ' . $posts);
            }

            foreach ($posts as $post) {
                $post->status = PostStatusType::PUBLISHED;

                Log::channel('publish_pending_posts')->info('A notícia de id: ' . $post->id . ' foi publicada');

                if ($post->highlight_position_scheduled) {

                    Log::channel('publish_pending_posts')->info('A notícia de id: ' . $post->id . ' tem uma posição de destaque agendada');

                    $featuredPosts = Post::where('highlight_position', $post->highlight_position_scheduled)->get();

                    foreach ($featuredPosts as $featuredPost) {

                        Log::channel('publish_pending_posts')->info('A notícia de id: ' . $featuredPost->id . ' teve sua posição de destaque: ' . $featuredPost->highlight_position . ' marcada como null');
                        $featuredPost->highlight_position = null;
                        $featuredPost->save();
                    }

                    $post->highlight_position = $post->highlight_position_scheduled;

                    Log::channel('publish_pending_posts')->info('A notícia de id: ' . $post->id . ' agora está na posição de destaque: ' . $post->highlight_position_scheduled);

                    $post->highlight_position_scheduled = null;
                }

                $post->save();
            }
        } catch (\Exception $exception) {
            Log::channel('publish_pending_posts')->info('Falha ao rodar command:publishpendingposts: ' . $exception->getMessage());
        }
    }
}
