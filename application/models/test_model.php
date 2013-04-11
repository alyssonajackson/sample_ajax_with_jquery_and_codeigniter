<?php

/*
 * @author: Alysson Ajackson
 * @date: Wed Apr 10 22:11:22 BRT 2013
 * */
class Test_model extends CI_Model {

    function __construct(){
        parent::__construct();
    }

    function get_data(){

        $type = $this->input->post('type');

        if($type != 1){
            return array();
        }

        return array(
            array(
                'name' => 'Abigail',
                'email' => 'ut.sem.Nulla@duinecurna.org',
                'registered_date' => '01/17/2014'
            ),
            array(
                'name' => 'Ralph',
                'email' => 'ultrices.posuere@Sed.org',
                'registered_date' => '10/08/2013'
            ),
            array(
                'name' => 'Walter',
                'email' => 'tellus.Suspendisse.sed@dis.ca',
                'registered_date' => '07/06/2013'
            ),
            array(
                'name' => 'Judith',
                'email' => 'et.tristique@liberoMorbiaccumsan.ca',
                'registered_date' => '07/03/2013'
            ),
            array(
                'name' => 'Geraldine',
                'email' => 'neque@egetlacus.edu',
                'registered_date' => '08/27/2012'
            ),
            array(
                'name' => 'Lysandra',
                'email' => 'lacinia@semvitaealiquam.ca',
                'registered_date' => '09/05/2012'
            ),
            array(
                'name' => 'Illiana',
                'email' => 'pharetra.Quisque.ac@aliquet.ca',
                'registered_date' => '09/08/2012'
            ),
            array(
                'name' => 'Phyllis',
                'email' => 'Donec@Mauris.edu',
                'registered_date' => '11/28/2013'
            ),
            array(
                'name' => 'Carson',
                'email' => 'senectus.et@miloremvehicula.org',
                'registered_date' => '08/22/2012'
            ),
            array(
                'name' => 'Philip',
                'email' => 'adipiscing.enim.mi@tinciduntadipiscing.edu',
                'registered_date' => '09/15/2013'
            ),
            array(
                'name' => 'Jasmine',
                'email' => 'gravida.nunc.sed@nibh.com',
                'registered_date' => '08/07/2013'
            ),
            array(
                'name' => 'Chaim',
                'email' => 'urna@molestieorci.com',
                'registered_date' => '04/04/2014'
            ),
            array(
                'name' => 'Harper',
                'email' => 'lectus@enimsitamet.org',
                'registered_date' => '04/16/2012'
            ),
            array(
                'name' => 'Cedric',
                'email' => 'Nunc.lectus@Integer.ca',
                'registered_date' => '01/12/2013'
            ),
            array(
                'name' => 'Quinlan',
                'email' => 'fringilla@maurisid.ca',
                'registered_date' => '06/18/2012'
            ),
            array(
                'name' => 'Phillip',
                'email' => 'turpis@nec.org',
                'registered_date' => '01/15/2013'
            ),
            array(
                'name' => 'Kimberly',
                'email' => 'ridiculus.mus@elitCurabitursed.ca',
                'registered_date' => '09/17/2012'
            ),
            array(
                'name' => 'Indigo',
                'email' => 'adipiscing.lacus@etlaciniavitae.com',
                'registered_date' => '11/22/2012'
            ),
            array(
                'name' => 'Laura',
                'email' => 'nec.metus@nondapibusrutrum.edu',
                'registered_date' => '08/29/2013'
            ),
            array(
                'name' => 'Nayda',
                'email' => 'metus@arcuSed.ca',
                'registered_date' => '05/16/2012'
            ),
            array(
                'name' => 'Ezekiel',
                'email' => 'non.nisi.Aenean@erat.com',
                'registered_date' => '01/18/2014'
            ),
            array(
                'name' => 'Nyssa',
                'email' => 'risus.Quisque@sitamet.ca',
                'registered_date' => '02/22/2013'
            ),
            array(
                'name' => 'Guinevere',
                'email' => 'Morbi.non.sapien@anteblandit.org',
                'registered_date' => '08/17/2012'
            ),
            array(
                'name' => 'Montana',
                'email' => 'cursus@fringillaDonec.org',
                'registered_date' => '05/06/2012'
            ),
            array(
                'name' => 'Malik',
                'email' => 'elit.Curabitur.sed@dictumcursusNunc.ca',
                'registered_date' => '08/31/2013'
            ),
            array(
                'name' => 'Yasir',
                'email' => 'commodo.auctor@tristique.com',
                'registered_date' => '11/27/2013'
            ),
            array(
                'name' => 'Jane',
                'email' => 'ipsum.porta@fermentumconvallis.edu',
                'registered_date' => '10/09/2013'
            ),
            array(
                'name' => 'David',
                'email' => 'convallis@sociisnatoque.org',
                'registered_date' => '08/23/2012'
            ),
            array(
                'name' => 'Candace',
                'email' => 'feugiat@parturient.ca',
                'registered_date' => '07/02/2013'
            ),
            array(
                'name' => 'Zorita',
                'email' => 'Ut@ut.ca',
                'registered_date' => '09/18/2013'
            ),
            array(
                'name' => 'Xerxes',
                'email' => 'Aliquam@ultricesa.edu',
                'registered_date' => '12/31/2012'
            ),
            array(
                'name' => 'Caesar',
                'email' => 'Nulla.tincidunt.neque@Donecfeugiatmetus.edu',
                'registered_date' => '07/10/2012'
            ),
            array(
                'name' => 'Bert',
                'email' => 'Duis.mi@lectussitamet.ca',
                'registered_date' => '06/06/2013'
            ),
            array(
                'name' => 'Jolie',
                'email' => 'tincidunt@diam.org',
                'registered_date' => '11/28/2012'
            ),
            array(
                'name' => 'Cain',
                'email' => 'mauris.Integer@loremauctorquis.edu',
                'registered_date' => '10/17/2013'
            ),
            array(
                'name' => 'Paloma',
                'email' => 'lorem.ipsum@dui.ca',
                'registered_date' => '01/20/2014'
            ),
            array(
                'name' => 'Calista',
                'email' => 'blandit@Seddictum.org',
                'registered_date' => '12/13/2012'
            ),
            array(
                'name' => 'Odysseus',
                'email' => 'sed@ante.ca',
                'registered_date' => '03/05/2013'
            ),
            array(
                'name' => 'Sonya',
                'email' => 'lacus.Ut.nec@nuncacmattis.com',
                'registered_date' => '05/15/2013'
            ),
            array(
                'name' => 'Lani',
                'email' => 'blandit@dapibusgravida.edu',
                'registered_date' => '02/26/2014'
            ),
            array(
                'name' => 'Porter',
                'email' => 'tempor.bibendum@placerat.com',
                'registered_date' => '12/08/2013'
            ),
            array(
                'name' => 'Adrian',
                'email' => 'Nunc.mauris.sapien@tortornibh.org',
                'registered_date' => '02/04/2014'
            ),
            array(
                'name' => 'Darrel',
                'email' => 'enim@Duis.edu',
                'registered_date' => '04/24/2012'
            ),
            array(
                'name' => 'Darrel',
                'email' => 'Suspendisse@libero.org',
                'registered_date' => '10/24/2013'
            ),
            array(
                'name' => 'Maia',
                'email' => 'auctor.nunc@necenim.org',
                'registered_date' => '09/10/2012'
            ),
            array(
                'name' => 'Jayme',
                'email' => 'nascetur.ridiculus.mus@necorciDonec.edu',
                'registered_date' => '03/29/2013'
            ),
            array(
                'name' => 'Giacomo',
                'email' => 'erat@sitametultricies.org',
                'registered_date' => '08/09/2012'
            ),
            array(
                'name' => 'Maite',
                'email' => 'quis.arcu.vel@intempus.ca',
                'registered_date' => '05/07/2013'
            ),
            array(
                'name' => 'Maia',
                'email' => 'libero.mauris@estarcu.edu',
                'registered_date' => '10/18/2013'
            ),
            array(
                'name' => 'Armand',
                'email' => 'tincidunt.dui@ullamcorpervelitin.org',
                'registered_date' => '02/23/2013'
            ),
        );
    }

}
