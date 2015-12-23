<?php

namespace Sasedev\Form\PlainBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 *
 * @author sasedev <seif.salah@gmail.com>
 */
class PlainTextType extends AbstractType
{

	/**
	 *
	 * {@inheritDoc} @see AbstractType::configureOptions()
	 */
	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(
			array('widget' => 'field', 'disabled' => true, 'date_format' => null, 'date_pattern' => null,
				'time_format' => null, 'attr' => array('class' => $this->getName()), 'readonly' => true, 'compound' => false));
	}

	/**
	 *
	 * {@inheritdoc} @see AbstractType::buildView()
	 */
	public function buildView(FormView $view, FormInterface $form, array $options)
	{
		$value = $form->getViewData();

		// set string representation
		if (true === $value) {
			$value = 'true';
		} elseif (false === $value) {
			$value = 'false';
		} elseif (null === $value) {
			$value = 'null';
		} elseif (is_array($value)) {
			$value = implode(', ', $value);
		}

		$view->vars['value'] = (string) $value;
	}

	/**
	 *
	 * {@inheritdoc} @see AbstractType::getName()
	 */
	public function getName()
	{
		return 'plain_text';
	}

	/**
	 *
	 * {@inheritDoc} @seeAbstractType::getBlockPrefix()
	 */
	public function getBlockPrefix()
	{
		return $this->getName();
	}
}
