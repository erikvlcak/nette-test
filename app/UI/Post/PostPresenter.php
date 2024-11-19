<?php

namespace App\UI\Post;

use Nette;
use Nette\Application\UI\Form;

final class PostPresenter extends Nette\Application\UI\Presenter
{
    public function __construct(
        private Nette\Database\Explorer $database,
    ) {}

    public function renderShow(int $id): void
    {
        $post =
            $this->database->table('posts')->get($id);

        if (!$post) {
            $this->error('Stranka nebyla nalezena, sorry jako.');
        }

        $this->template->post = $post;
    }

    protected function createComponentCommentForm(): Form
    {
        $form = new Form;

        $form->addText('name', 'Jmeno:')->setRequired();
        $form->addEmail('email', 'Email:');
        $form->addTextArea('content', 'Komentar: ')->setRequired();
        $form->addSubmit('send', 'Publikovat komentar');

        return $form;
    }
}
