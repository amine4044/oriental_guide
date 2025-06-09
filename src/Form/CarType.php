<?php

namespace App\Form;

use App\Entity\Car;
use App\Entity\City;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CarType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'attr' => ['placeholder' => 'Nom de la voiture'],
                'label' => false,
            ])
            ->add('address', TextType::class, [
                'attr' => ['placeholder' => 'position de voiture'],
                'label' => false,
            ])
            ->add('image', UrlType::class, [
                'attr' => ['placeholder' => 'URL de l\'image'],
                'label' => false,
            ])
            ->add('price', MoneyType::class, [
                'attr' => ['placeholder' => 'Prix de location par jour'],
                'label' => false,
                'currency' => 'MAD',
            ])
            ->add('city', EntityType::class, [
                'class' => City::class,
                'choice_label' => 'name', // ou 'id' si tu préfères, mais 'name' est plus lisible
                'placeholder' => 'Sélectionnez une ville',
                'label' => false,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Car::class,
        ]);
    }
}
