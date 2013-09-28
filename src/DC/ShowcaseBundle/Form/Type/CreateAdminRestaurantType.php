<?

namespase DC\ShowcaseBundle\Form\Type

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class CreateAdminRestaurantType extends AbstractType{

  public function buildForm(FormBuilderInterface $builder, array $options){
    $builder->add('restaurant')
            ->add('name','text')
            ->add('title','text')
            ->add('descriprion','textarea')
            ->add('notifEmail','text')
            ->add('isSendingAllOrders','checkbox')
            ->add('active','checkbox')
            ->add('park_domains','text')
            ->add('save', 'submit');
            ->add('delete', 'submit');
  }

  public function getName(){
    return "create_admin_restaurant";
  }
} 
