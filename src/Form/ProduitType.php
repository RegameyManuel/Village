<?php

namespace App\Form;

use App\Entity\Produit;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('prod_marque')
            ->add('prod_modele')
            ->add('prod_finition')
            ->add('prod_lib_court')
            ->add('prod_lib_long')
            ->add('prod_prix')
            ->add('prod_photo')
            ->add('prod_actif')
            ->add('prod_reference')
            ->add('prod_rubrique')
            ->add('prod_fournisseur')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}
