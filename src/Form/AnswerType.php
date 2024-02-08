<?php

namespace App\Form;

use App\Entity\Answer;
use App\Entity\Member;
use App\Entity\Tag;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AnswerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('score')
            ->add('prefered')
            ->add('publication_date')
            ->add('link')
            ->add('reponse')
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
            'data_class' => Answer::class,
        ]);
    }
}
