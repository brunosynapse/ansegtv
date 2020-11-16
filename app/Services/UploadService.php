<?php
/**
 * Copyright (c) 2020. Desenvolvido e Testado por Marden Cavalcante
 */

namespace App\Services;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UploadService
{
    /**
     * @var string
     */
    private $folder = 'documents';

    /**
     * @var string
     */
    private $key = 'image';

    /**
     * @var string
     */
    private $disk;

    /**
     * UploadService constructor.
     * @param string $disk
     */
    public function __construct($disk = 'public')
    {
        $this->disk = $disk;
    }

    public function single(Request $request, $name = '')
    {
        $date = date('d-m-Y-H-m-i');
        $nameRandom = Str::random(8);
        $key = $this->key;
        $extension = $request->$key->getClientOriginalExtension();

        $randomName = "$nameRandom-$date." . $extension;
        $dynamicName = "$name-$date." . $extension;

        $documentIdentify = $name == null ? $randomName : $dynamicName;
        Storage::disk($this->disk)->putFileAs($this->folder, $request->$key, $documentIdentify);

        return ['path' => $this->folder . "/$documentIdentify"];
    }

    /**
     * @return mixed
     */
    public function getFolder()
    {
        return $this->folder;
    }

    /**
     * @param mixed $folder
     * @return UploadService
     */
    public function setFolder($folder)
    {
        if (!is_null($folder)) {
            $this->folder = $folder;
        }
        return $this;
    }

    public function removeFilePah($path)
    {
        Storage::disk($this->disk)->delete($path);
        return $this;
    }

    /**
     * @return mixed
     */
    public
    function getKey()
    {
        return $this->key;
    }

    /**
     * @param mixed $key
     * @return UploadService
     */
    public
    function setKey($key)
    {
        if (!is_null($key)) {
            $this->key = $key;
        }
        return $this;
    }
}
