<?php

namespace App\Form;

use App\Entity\Booking;
use App\Entity\Car;
use App\Entity\Hotel;
use App\Entity\Restaurant;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BookingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('price')
            ->add('dateFrom', null, [
                'widget' => 'single_text'
            ])
            ->add('dateTo', null, [
                'widget' => 'single_text'
            ])
            ->add('hotel', EntityType::class, [
                'class' => Hotel::class,
'choice_label' => 'id',
            ])
            ->add('car', EntityType::class, [
                'class' => Car::class,
'choice_label' => 'id',
            ])
            ->add('restaurant', EntityType::class, [
                'class' => Restaurant::class,
'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Booking::class,
        ]);
    }
}
