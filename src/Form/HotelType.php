<?php

namespace App\Form;

use App\Entity\City;
use App\Entity\Hotel;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HotelType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'attr' => ['placeholder' => 'Nom de l’hôtel'],
                'label' => false,
            ])
            ->add('stars', IntegerType::class, [
                'attr' => ['placeholder' => 'Nombre d’étoiles'],
                'label' => false,
            ])
            ->add('address', TextType::class, [
                'attr' => ['placeholder' => 'Adresse de l’hôtel'],
                'label' => false,
            ])
            ->add('price', MoneyType::class, [
                'attr' => ['placeholder' => 'Prix par nuit'],
                'label' => false,
                'currency' => 'MAD', // Tu peux changer selon ta devise
            ])
            ->add('image', UrlType::class, [
                'attr' => ['placeholder' => 'URL de l’image'],
                'label' => false,
            ])
            ->add('city', EntityType::class, [
                'class' => City::class,
                'choice_label' => 'name', // change "name" si tu veux afficher autre chose
                'placeholder' => 'Sélectionnez une ville',
                'label' => false,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Hotel::class,
        ]);
    }
}
