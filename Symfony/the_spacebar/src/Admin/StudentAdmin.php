<?php

namespace App\Admin;

use App\Entity\Classroom;
use App\Entity\Student;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Form\Type\ModelType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class StudentAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name', TextType::class)
            ->add('dateofbirth', DateType::class, [
                'years' => range(date('Y'), date('1990'))
            ])
            ->add('classroom', ModelType::class, [
                'class' => Classroom::class,
                'property' => 'classid',
            ])
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name')
            ->add('dateofbirth')
            ->add('classroom.classid')
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name')
            ->add('classroom', null, [], EntityType::class,[
                'class' => Classroom::class,
                'choice_label' => 'classid',
            ])
        ;
    }

    public function toString($object)
    {
        return $object instanceof Student
            ? $object->getTitle()
            : 'Student';
    }
}