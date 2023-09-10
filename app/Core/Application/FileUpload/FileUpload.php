<?php

namespace App\Core\Application\FileUpload;

use App\Exceptions\IseException;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class FileUpload
{
    private UploadedFile $uploaded_file;
    private array $available_type;
    private array $available_mime_type;
    private int $file_size_limit;
    private string $path;
    private string $seed;
    private string $name;

    private string $file_name;

    public function __construct(UploadedFile $uploaded_file, string $path, string $seed, string $name)
    {
        $this->uploaded_file = $uploaded_file;
        $this->path = $path;
        $this->seed = $seed;
        $this->name = trim($name);


        $this->available_type = [
            "jpg",
            "jpeg",
            "png",
            "pdf"
        ];

        $this->available_mime_type = [
            "image/jpg",
            "image/jpeg",
            "image/png",
            "application/pdf",
        ];
        $this->file_size_limit = 3145728; // 3Mb

        $this->check();
    }

    public static function create(UploadedFile $uploaded_file, string $path, string $seed, string $name): self
    {
        return new self(
            $uploaded_file,
            "public/" . $path,
            $seed,
            $name
        );
    }

    /**
     * @throws Exception
     */
    public function check(): void
    {
        if (
            !in_array($this->uploaded_file->getClientOriginalExtension(), $this->available_type) ||
            !in_array($this->uploaded_file->getMimeType(), $this->available_mime_type)
        ) {
            IseException::throw("Tipe File {$this->name} Invalid", 2000);
        }
        if ($this->uploaded_file->getSize() > $this->file_size_limit) {
            IseException::throw("{$this->name} Harus Dibawah 1Mb", 2000);
        }
    }

    /**
     * @return string
     */
    public function upload(): string
    {
        $file_front = str_replace(" ", "_", strtolower($this->name));
        $encrypted_seed = base64_encode($this->seed);
        $this->file_name = $file_front . "_" . $encrypted_seed . "." . $this->uploaded_file->getClientOriginalExtension();
        $uploaded = Storage::putFileAs(
            $this->path,
            $this->uploaded_file,
            $this->file_name
        );
        if (!$uploaded) {
            IseException::throw("Upload {$this->name} Gagal", 2003);
        }

        return $this->path . '/' . $this->file_name;
    }

    public function getUrl()
    {
        return Storage::url($this->path . '/' . $this->file_name);
    }
}
