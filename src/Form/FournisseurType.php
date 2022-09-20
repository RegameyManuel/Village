<?php

namespace App\Form;

use App\Entity\Fournisseur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FournisseurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('fourni_societe')
            ->add('fourni_nom')
            ->add('fourni_prenom')
            ->add('fourni_telephone')
            ->add('fourni_mail')
            ->add('fourni_adresse')
            ->add('fourni_cp')
            ->add('fourni_ville')
            ->add('fourni_region')
            ->add('fourni_pays')
            ->add('fourni_constructeur')
            ->add('fourni_importateur')
            ->add('fourni_service')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Fournisseur::class,
        ]);
    }
}
