<?php

namespace App\DataFixtures;

use App\Entity\Categories;
use App\Entity\Products;
use App\Entity\Subcategories;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ProductsFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $category1 = new Categories();
        $category1->setName('Электроника');

        $category2 = new Categories();
        $category2->setName('Компьютеры');

        $category3 = new Categories();
        $category3->setName('Видеотехника');

        $category4 = new Categories();
        $category4->setName('Фотоаппараты');

        $category5 = new Categories();
        $category5->setName('Аудиотехника');

        $category6 = new Categories();
        $category6->setName('Аксесуары');

        $manager->persist($category1);
        $manager->persist($category2);
        $manager->persist($category3);
        $manager->persist($category4);
        $manager->persist($category5);
        $manager->persist($category6);

        $subcategory8 = new Subcategories();
        $subcategory8->setName('Видеокамеры');
        $subcategory8->setCategory($category3);

        $subcategory9 = new Subcategories();
        $subcategory9->setName('Canon');
        $subcategory9->setCategory($category4);

        $subcategory10 = new Subcategories();
        $subcategory10->setName('Nikon');
        $subcategory10->setCategory($category4);

        $subcategory11 = new Subcategories();
        $subcategory11->setName('MP3');
        $subcategory11->setCategory($category5);

        $subcategory12 = new Subcategories();
        $subcategory12->setName('HDD');
        $subcategory12->setCategory($category6);

        $subcategory13 = new Subcategories();
        $subcategory13->setName('Видеокарты');
        $subcategory13->setCategory($category6);

        $subcategory1 = new Subcategories();
        $subcategory1->setName('Телевизоры');
        $subcategory1->setCategory($category1);

        $subcategory2 = new Subcategories();
        $subcategory2->setName('Мониторы');
        $subcategory2->setCategory($category1);

        $subcategory3 = new Subcategories();
        $subcategory3->setName('Ноутбуки');
        $subcategory3->setCategory($category2);

        $subcategory4 = new Subcategories();
        $subcategory4->setName('Планшеты');
        $subcategory4->setCategory($category2);

        $subcategory5 = new Subcategories();
        $subcategory5->setName('Гибридные компьютеры');
        $subcategory5->setCategory($category2);

        $subcategory6 = new Subcategories();
        $subcategory6->setName('Планшеты ПК');
        $subcategory6->setCategory($category2);

        $subcategory7 = new Subcategories();
        $subcategory7->setName('Компьютеры');
        $subcategory7->setCategory($category2);

        $manager->persist($subcategory3);
        $manager->persist($subcategory4);
        $manager->persist($subcategory5);
        $manager->persist($subcategory6);
        $manager->persist($subcategory7);
        $manager->persist($subcategory8);
        $manager->persist($subcategory9);
        $manager->persist($subcategory10);
        $manager->persist($subcategory11);
        $manager->persist($subcategory12);
        $manager->persist($subcategory13);
        $manager->persist($subcategory1);
        $manager->persist($subcategory2);

        $product1 = new Products();
        $product1->setName('Samsung Galaxy Tab Active 2 8.0 SM-T395 16Gb');
        $product1->setCategory($category2);
        $product1->setSubcategory($subcategory4);
        $product2 = new Products();
        $product2->setName('Huawei MediaPad T3 10 16Gb');
        $product2->setCategory($category2);
        $product2->setSubcategory($subcategory4);
        $product3 = new Products();
        $product3->setName('Huawei MediaPad T3 8 LTE 16Gb');
        $product3->setCategory($category2);
        $product3->setSubcategory($subcategory4);
        $product4 = new Products();
        $product4->setName('Apple iPad 10.2 Wi-Fi + Cellular 32Gb (2019)');
        $product4->setCategory($category2);
        $product4->setSubcategory($subcategory4);
        $product5 = new Products();
        $product5->setName('Glofiish Evo');
        $product5->setCategory($category2);
        $product5->setSubcategory($subcategory4);
        $product6 = new Products();
        $product6->setName('Samsung Galaxy Tab S6 10.5 SM-T865 128Gb LTE');
        $product6->setCategory($category2);
        $product6->setSubcategory($subcategory4);
        $product7 = new Products();
        $product7->setName('Lenovo Tablet 10 4/64Gb (20L3000RRT)');
        $product7->setCategory($category2);
        $product7->setSubcategory($subcategory4);
        $product8 = new Products();
        $product8->setName('Lenovo Tab E10 TB-X104L 2/32Gb (ZA470062UA)');
        $product8->setCategory($category2);
        $product8->setSubcategory($subcategory4);
        $product9 = new Products();
        $product9->setName('Lenovo Tab M8 TB-8505F 2/32Gb (ZA5G0054UA)');
        $product9->setCategory($category2);
        $product9->setSubcategory($subcategory4);
        $product10 = new Products();
        $product10->setName('Lenovo Tab M8 TB-8505X 2/32Gb LTE (ZA5H0088UA)');
        $product10->setCategory($category2);
        $product10->setSubcategory($subcategory4);
        $product11 = new Products();
        $product11->setName('Lenovo Tab M10 Plus TB-X606F 4/64Gb (ZA5T0080UA)');
        $product11->setCategory($category2);
        $product11->setSubcategory($subcategory4);
        $product12 = new Products();
        $product12->setName('Prestigio Smartkids 3197 1/16Gb');
        $product12->setCategory($category2);
        $product12->setSubcategory($subcategory4);
        $product13 = new Products();
        $product13->setName('Lenovo Yoga Smart Tab YT-X705L 3/32GB LTE (ZA530037UA)');
        $product13->setCategory($category2);
        $product13->setSubcategory($subcategory4);
        $product14 = new Products();
        $product14->setName('Prestigio MultiPad Grace 4991 4G 2/16Gb');
        $product14->setCategory($category2);
        $product14->setSubcategory($subcategory4);
        $product15 = new Products();
        $product15->setName('Apple iPad Pro 12.9 Wi-Fi 512Gb (2018)');
        $product15->setCategory($category2);
        $product15->setSubcategory($subcategory4);

        $product16 = new Products();
        $product16->setName('Sharp 14EM3G');
        $product16->setCategory($category1);
        $product16->setSubcategory($subcategory1);
        $product17 = new Products();
        $product17->setName('Lenovo IdeaPad 320-14IAP (80XQ007ARA) Onyx Black');
        $product17->setCategory($category2);
        $product17->setSubcategory($subcategory3);
        $product18 = new Products();
        $product18->setName('Philips 232EL');
        $product18->setCategory($category1);
        $product18->setSubcategory($subcategory2);
        $product19 = new Products();
        $product19->setName('Asus X543UB-DM973 Silver Gradient');
        $product19->setCategory($category2);
        $product19->setSubcategory($subcategory3);
        $product20 = new Products();
        $product20->setName('Asus X543UB-DM973 Silver Gradient');
        $product20->setCategory($category2);
        $product20->setSubcategory($subcategory3);
        $product21 = new Products();
        $product21->setName('HP 15-ra047ur (3QT61EA) Jet Black');
        $product21->setCategory($category2);
        $product21->setSubcategory($subcategory3);
        $product22 = new Products();
        $product22->setName('HP 15-ra047ur (3QT61EA) Jet Black');
        $product22->setCategory($category2);
        $product22->setSubcategory($subcategory3);
        $product23 = new Products();
        $product23->setName('HP 15-ra047ur (3QT61EA) Jet Black');
        $product23->setCategory($category2);
        $product23->setSubcategory($subcategory3);
        $product24 = new Products();
        $product24->setName('Samsung Galaxy Tab A 10.1');
        $product24->setCategory($category2);
        $product24->setSubcategory($subcategory4);
        $product25 = new Products();
        $product25->setName('Samsung Galaxy Tab A 10.1');
        $product25->setCategory($category2);
        $product25->setSubcategory($subcategory4);
        $product26 = new Products();
        $product26->setName('Samsung Galaxy Tab A 10.1');
        $product26->setCategory($category2);
        $product26->setSubcategory($subcategory4);
        $product27 = new Products();
        $product27->setName('ASUS Transformer Book T100');
        $product27->setCategory($category2);
        $product27->setSubcategory($subcategory5);
        $product28 = new Products();
        $product28->setName('ASUS Transformer Book T100');
        $product28->setCategory($category2);
        $product28->setSubcategory($subcategory5);
        $product29 = new Products();
        $product29->setName('ASUS Transformer Book T100');
        $product29->setCategory($category2);
        $product29->setSubcategory($subcategory5);
        $product30 = new Products();
        $product30->setName('Apple iPad Wi-Fi 32GB MR7F2RK/A Space Grey');
        $product30->setCategory($category2);
        $product30->setSubcategory($subcategory6);
        $product31 = new Products();
        $product31->setName('Apple iPad Wi-Fi 32GB MR7F2RK/A Space Grey');
        $product31->setCategory($category2);
        $product31->setSubcategory($subcategory6);
        $product32 = new Products();
        $product32->setName('Apple iPad Wi-Fi 32GB MR7F2RK/A Space Grey');
        $product32->setCategory($category2);
        $product32->setSubcategory($subcategory6);
        $product33 = new Products();
        $product33->setName('IMPRESSION Game');
        $product33->setCategory($category2);
        $product33->setSubcategory($subcategory7);
        $product34 = new Products();
        $product34->setName('IMPRESSION Game');
        $product34->setCategory($category2);
        $product34->setSubcategory($subcategory7);
        $product35 = new Products();
        $product35->setName('IMPRESSION Game');
        $product35->setCategory($category2);
        $product35->setSubcategory($subcategory7);
        $product36 = new Products();
        $product36->setName('Globex G');
        $product36->setCategory($category3);
        $product36->setSubcategory($subcategory8);
        $product37 = new Products();
        $product37->setName('Globex G');
        $product37->setCategory($category3);
        $product37->setSubcategory($subcategory8);
        $product38 = new Products();
        $product38->setName('Apple iPod');
        $product38->setCategory($category5);
        $product38->setSubcategory($subcategory13);
        $product39 = new Products();
        $product39->setName('Apple iPod');
        $product39->setCategory($category5);
        $product39->setSubcategory($subcategory13);
        $product40 = new Products();
        $product40->setName('Apple iPod');
        $product40->setCategory($category5);
        $product40->setSubcategory($subcategory13);

        $manager->persist($product3);
        $manager->persist($product4);
        $manager->persist($product5);
        $manager->persist($product6);
        $manager->persist($product7);
        $manager->persist($product8);
        $manager->persist($product9);
        $manager->persist($product10);
        $manager->persist($product11);
        $manager->persist($product12);
        $manager->persist($product13);
        $manager->persist($product14);
        $manager->persist($product15);
        $manager->persist($product16);
        $manager->persist($product17);
        $manager->persist($product18);
        $manager->persist($product19);
        $manager->persist($product20);
        $manager->persist($product21);
        $manager->persist($product22);
        $manager->persist($product23);
        $manager->persist($product24);
        $manager->persist($product25);
        $manager->persist($product26);
        $manager->persist($product27);
        $manager->persist($product28);
        $manager->persist($product29);
        $manager->persist($product30);
        $manager->persist($product31);
        $manager->persist($product32);
        $manager->persist($product33);
        $manager->persist($product34);
        $manager->persist($product35);
        $manager->persist($product36);
        $manager->persist($product37);
        $manager->persist($product38);
        $manager->persist($product39);
        $manager->persist($product40);
        $manager->persist($product1);
        $manager->persist($product2);

        $manager->flush();
    }
}










