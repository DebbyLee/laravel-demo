<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use function Laravel\Prompts\text;
use function Laravel\Prompts\spin;
use function Laravel\Prompts\textarea;
use function Laravel\Prompts\confirm;
use App\Models\Book;

class createBookCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-book-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $title = text('What should the title be?');
        $author = text('Who is the author?');
        $isbn = text('What is isbn');
        $description = textarea('What is the description of the book?');



        $response = spin(
            fn () => Book::create([
                'title' => $title,
                'author' => $author,
                'isbn' => $isbn,
            ]),
            'Fetching response...'
        );
    }
}
