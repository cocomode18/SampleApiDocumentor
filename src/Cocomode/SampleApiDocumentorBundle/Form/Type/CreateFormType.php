<?php

namespace Cocomode\SampleApiDocumentorBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * CreateFormType.
 *
 * @author Kyosuke Nakajima <kyosule.nakajima@dzb.jp>
 */
class CreateFormType extends AbstractType
{
    /**
     * @inheritDoc
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('route', 'text');
        $builder->add('responseCode', 'text');
        $builder->add('responseFormat', 'text');
        $builder->add('response', 'text');
    }

    /**
     * @inheritDoc
     */
    public function getName()
    {
        return 'create_api';
    }

    /**
     * @inheritDoc
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cocomode\SampleApiDocumentorBundle\Entity\Api',
        ));
    }
}
