<?php

use Illuminate\Database\Seeder;
use App\Models\Param;


class ParamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Param::truncate();
        Param::create([
            'type'=>'accueil',
            'name'=>'texteAccueil',
            'value'=>'Un détail, un geste anodin dans le quotidien mais qui ce jour-là aura toute son importance …
            Capter … Saisir … Trouver le moment …
            Mes objectifs seront les témoins artistiques de votre moment, un sourire, un geste, un regard … De votre entrée dans cette journée tant attendue jusqu’aux dernières minutes de l’enchantement, je vous propose une ombre discrète, attentive au naturel, aux émotions mêmes les plus cachées et aux rendez-vous clefs de cette journée.
            Libre de tous vos mouvements et loin des poses forcées et des photos stéréotypées, VOUS, vous serez cristallisés dans le charme d’un noir et blanc, dans l’intimité d’un baiser, dans l’élégance de l’évènement.'
        ]);

        Param::create([
            'type'=>'accueil',
            'name'=>'texteAccueil2',
            'value'=>'Un détail, ...'
        ]);

        Param::create([
            'type'=>'footer',
            'name'=>'ligne1',
            'value'=>'Reproductions Interdites - Franck SVOBODA - Photographe événementiel - Tous droits réservés © 2008-2020'
        ]);
        Param::create([
            'type'=>'footer',
            'name'=>'ligne2',
            'value'=>'955 rue Jean Jaurès 62700 Bruay-la-B. - Tél : 07.69.75.74.88 - Siren : 539 392 704'
        ]);

        Param::create([
            'type'=>'lien',
            'name'=>'facebook',
            'value'=>'https://www.facebook.com/PourUnOuiEternel.photographe/'
        ]);
        Param::create([
            'type'=>'lien',
            'name'=>'twitter',
            'value'=>'https://twitter.com/PourOuiEternel'
        ]);
        Param::create([
            'type'=>'lien',
            'name'=>'instagram',
            'value'=>'https://www.instagram.com/pourunouieternel/?hl=fr'
        ]);

    }
}
