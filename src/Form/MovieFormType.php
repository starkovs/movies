<?php

namespace App\Form;

use App\Entity\Movie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class MovieFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'attr' => array(
                    'placeholder' => 'Enter title...',
                    'class' => 'bg-transparent block border-b-2 w-full h-20 text-6xl outline-none'
                ),
                'label' => false,
                'required' => false,
            ])
            ->add('releaseYear', IntegerType::class, [
                'attr' => array(
                    'placeholder' => 'Enter release year...',
                    'class' => 'bg-transparent block border-b-2 w-full h-20 text-6xl outline-none'
                ),
                'label' => false,
                'required' => false,
            ])
            ->add('description', TextareaType::class, [
                'attr' => array(
                    'placeholder' => 'Enter description...',
                    'class' => 'bg-transparent block border-b-2 w-full h-60 text-6xl outline-none'
                ),
                'label' => false,
                'required' => false,
            ])
            ->add('imagePath', FileType::class, [
                'required' => false,
                'mapped' => false,
            ])
            // ->add('actors')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Movie::class,
        ]);
    }
}
