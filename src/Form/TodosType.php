<?php

namespace App\Form;

use App\Entity\Todos;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;


class TodosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Task',
            ])
            ->add('date', DateType::class, [
                'label' => 'Start Date',
            ])
            ->add('completiondate', DateType::class, [
                'label' => 'End Date',
            ])
            ->add('status', ChoiceType::class, [
                'label' => 'Task',
                'choices'  => [
                    'In Progress' => 'In Progress',
                    'Yes' => 'Yes',
                    'No' => 'No',
                ]

            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Todos::class,
        ]);
    }
}
