<?php

namespace App\Form;

use App\Entity\Member;
use App\Entity\Question;
use App\Entity\Tag;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class QuestionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('publication_date')
            ->add('validated')
            ->add('country')
            ->add('view')
            ->add('question')
            ->add('likes')
            ->add('tags', EntityType::class, [
                'class' => Tag::class,
'choice_label' => 'id',
'multiple' => true,
            ])
            ->add('member', EntityType::class, [
                'class' => Member::class,
'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Question::class,
        ]);
    }
}
