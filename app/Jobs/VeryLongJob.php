<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\CommentMail;
use App\Models\Comment;
use App\Models\Article;

class VeryLongJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    protected $text_article;
    protected $comment;
    public function __construct(Comment $comment, string $text_article)
    {
        $this->text_article = $text_article;
        $this->comment = $comment;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle() //исполняемая ссылка на метод
    {
        Mail::to('dimkazernov@mail.ru')->send(new CommentMail($this->comment, $this->text_article));
    }
}
