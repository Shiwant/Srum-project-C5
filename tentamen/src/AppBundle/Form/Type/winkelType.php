<?php
namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use AppBundle\Entity\winkel;
use AppBundle\Form\Type\winkelType;
//vul aan als je andere invoerveld-typen wilt gebruiken in je formulier
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

//EntiteitType vervangen door b.v. KlantType
class winkelType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		//gebruiken wat je nodig hebt, de id hoeft er niet bij als deze auto increment is
        $builder
            ->add('id', IntegerType::class) //naam is b.v. een attribuut of variabele van klant
        ;
        $builder
            ->add('winkelnaam', TextType::class) //naam is b.v. een attribuut of variabele van klant
        ;
        $builder
            ->add('oppervlakte', IntegerType::class) //naam is b.v. een attribuut of variabele van klant
        ;
        $builder
            ->add('plaats', TextType::class) //naam is b.v. een attribuut of variabele van klant
        ;
		//zie
		//http://symfony.com/doc/current/forms.html#built-in-field-types
		//voor meer typen invoer
    }

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => 'AppBundle\Entity\winkel', //Entiteit vervangen door b.v. Klant
		));
	}
}

?>
