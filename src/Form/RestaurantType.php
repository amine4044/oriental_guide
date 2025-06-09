<?php

namespace App\Form;

use App\Entity\City;
use App\Entity\Restaurant;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RestaurantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'attr' => ['placeholder' => 'Nom du restaurant'],
                'label' => false,
            ])
            ->add('type', TextType::class, [
                'attr' => ['placeholder' => 'Type de cuisine (ex : Marocain, Italien...)'],
                'label' => false,
            ])
            ->add('image', UrlType::class, [
                'attr' => ['placeholder' => 'URL de l\'image'],
                'label' => false,
            ])
            ->add('address', TextType::class, [
                'attr' => ['placeholder' => 'Adresse du restaurant'],
                'label' => false,
            ])
            ->add('city', EntityType::class, [
                'class' => City::class,
                'choice_label' => 'name', // Affiche le nom de la ville au lieu de l'id
                'placeholder' => 'Choisissez une ville',
                'label' => false,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Restaurant::class,
        ]);
    }
}
