<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tilts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->timestamps();
        });

        DB::table('tilts')->insert(
            array('name' => '35° optimale'),
            array('name' => '> 25°/40°<'),
            array('name' => '0° (à plat) à 10°'),
            array('name' => '90° verticale (déconseillée)'),
            array('name' => '> 10°/25°<')
        );

        Schema::create('south_orientations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->timestamps();
        });

        DB::table('south_orientations')->insert(
            array('name' => '180° Sud'),
            array('name' => '+/-5°'),
            array('name' => '+/- 10°'),
            array('name' => '+/- 15°'),
            array('name' => '> 20°')
        );

        Schema::create('departments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('zip', 3);
            $table->string('name', 150);
            $table->timestamps();
        });

        DB::table('departments')->insert(
            array('zip' => '01', 'name' => 'Ain'),
            array('zip' => '02', 'name' => 'Aisne'),
            array('zip' => '03', 'name' => 'Allier'),
            array('zip' => '05', 'name' => 'Hautes-Alpes'),
            array('zip' => '04', 'name' => 'Alpes-de-Haute-Provence'),
            array('zip' => '06', 'name' => 'Alpes-Maritimes'),
            array('zip' => '07', 'name' => 'Ardèche'),
            array('zip' => '08', 'name' => 'Ardennes'),
            array('zip' => '09', 'name' => 'Ariège'),
            array('zip' => '10', 'name' => 'Aube'),
            array('zip' => '11', 'name' => 'Aude'),
            array('zip' => '12', 'name' => 'Aveyron'),
            array('zip' => '13', 'name' => 'Bouches-du-Rhône'),
            array('zip' => '14', 'name' => 'Calvados'),
            array('zip' => '15', 'name' => 'Cantal'),
            array('zip' => '16', 'name' => 'Charente'),
            array('zip' => '17', 'name' => 'Charente-Maritime'),
            array('zip' => '18', 'name' => 'Cher'),
            array('zip' => '19', 'name' => 'Corrèze'),
            array('zip' => '2a', 'name' => 'Corse-du-sud'),
            array('zip' => '2b', 'name' => 'Haute-corse'),
            array('zip' => '21', 'name' => 'Côte-d\'or'),
            array('zip' => '22', 'name' => 'Côtes-d\'armor'),
            array('zip' => '23', 'name' => 'Creuse'),
            array('zip' => '24', 'name' => 'Dordogne'),
            array('zip' => '25', 'name' => 'Doubs'),
            array('zip' => '26', 'name' => 'Drôme'),
            array('zip' => '27', 'name' => 'Eure'),
            array('zip' => '28', 'name' => 'Eure-et-Loir'),
            array('zip' => '29', 'name' => 'Finistère'),
            array('zip' => '30', 'name' => 'Gard'),
            array('zip' => '31', 'name' => 'Haute-Garonne'),
            array('zip' => '32', 'name' => 'Gers'),
            array('zip' => '33', 'name' => 'Gironde'),
            array('zip' => '34', 'name' => 'Hérault'),
            array('zip' => '35', 'name' => 'Ile-et-Vilaine'),
            array('zip' => '36', 'name' => 'Indre'),
            array('zip' => '37', 'name' => 'Indre-et-Loire'),
            array('zip' => '38', 'name' => 'Isère'),
            array('zip' => '39', 'name' => 'Jura'),
            array('zip' => '40', 'name' => 'Landes'),
            array('zip' => '41', 'name' => 'Loir-et-Cher'),
            array('zip' => '42', 'name' => 'Loire'),
            array('zip' => '43', 'name' => 'Haute-Loire'),
            array('zip' => '44', 'name' => 'Loire-Atlantique'),
            array('zip' => '45', 'name' => 'Loiret'),
            array('zip' => '46', 'name' => 'Lot'),
            array('zip' => '47', 'name' => 'Lot-et-Garonne'),
            array('zip' => '48', 'name' => 'Lozère'),
            array('zip' => '49', 'name' => 'Maine-et-Loire'),
            array('zip' => '50', 'name' => 'Manche'),
            array('zip' => '51', 'name' => 'Marne'),
            array('zip' => '52', 'name' => 'Haute-Marne'),
            array('zip' => '53', 'name' => 'Mayenne'),
            array('zip' => '54', 'name' => 'Meurthe-et-Moselle'),
            array('zip' => '55', 'name' => 'Meuse'),
            array('zip' => '56', 'name' => 'Morbihan'),
            array('zip' => '57', 'name' => 'Moselle'),
            array('zip' => '58', 'name' => 'Nièvre'),
            array('zip' => '59', 'name' => 'Nord'),
            array('zip' => '60', 'name' => 'Oise'),
            array('zip' => '61', 'name' => 'Orne'),
            array('zip' => '62', 'name' => 'Pas-de-Calais'),
            array('zip' => '63', 'name' => 'Puy-de-Dôme'),
            array('zip' => '64', 'name' => 'Pyrénées-Atlantiques'),
            array('zip' => '65', 'name' => 'Hautes-Pyrénées'),
            array('zip' => '66', 'name' => 'Pyrénées-Orientales'),
            array('zip' => '67', 'name' => 'Bas-Rhin'),
            array('zip' => '68', 'name' => 'Haut-Rhin'),
            array('zip' => '69', 'name' => 'Rhône'),
            array('zip' => '70', 'name' => 'Haute-Saône'),
            array('zip' => '71', 'name' => 'Saône-et-Loire'),
            array('zip' => '72', 'name' => 'Sarthe'),
            array('zip' => '73', 'name' => 'Savoie'),
            array('zip' => '74', 'name' => 'Haute-Savoie'),
            array('zip' => '75', 'name' => 'Paris'),
            array('zip' => '76', 'name' => 'Seine-Maritime'),
            array('zip' => '77', 'name' => 'Seine-et-Marne'),
            array('zip' => '78', 'name' => 'Yvelines'),
            array('zip' => '79', 'name' => 'Deux-Sèvres'),
            array('zip' => '80', 'name' => 'Somme'),
            array('zip' => '81', 'name' => 'Tarn'),
            array('zip' => '82', 'name' => 'Tarn-et-Garonne'),
            array('zip' => '83', 'name' => 'Var'),
            array('zip' => '84', 'name' => 'Vaucluse'),
            array('zip' => '85', 'name' => 'Vendée'),
            array('zip' => '86', 'name' => 'Vienne'),
            array('zip' => '87', 'name' => 'Haute-Vienne'),
            array('zip' => '88', 'name' => 'Vosges'),
            array('zip' => '89', 'name' => 'Yonne'),
            array('zip' => '90', 'name' => 'Territoire de Belfort'),
            array('zip' => '91', 'name' => 'Essonne'),
            array('zip' => '92', 'name' => 'Hauts-de-Seine'),
            array('zip' => '93', 'name' => 'Seine-Saint-Denis'),
            array('zip' => '94', 'name' => 'Val-de-Marne'),
            array('zip' => '95', 'name' => 'Val-d\'oise'),
            array('zip' => '976', 'name' => 'Mayotte'),
            array('zip' => '971', 'name' => 'Guadeloupe'),
            array('zip' => '973', 'name' => 'Guyane'),
            array('zip' => '972', 'name' => 'Martinique'),
            array('zip' => '974', 'name' => 'Réunion')
        );

        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name', 200);
            $table->string('last_name', 200);
            $table->string('phone', 50)->nullable();
            $table->string('email', 250)->nullable();
            $table->timestamps();
        });

        Schema::create('structure_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 250);
            $table->timestamps();
        });

        DB::table('structure_types')->insert(array(
            array('name' => 'structure initiatrice'),
            array('name' => 'autre'),
            array('name' => 'bailleur social'),
            array('name' => 'collectivité'),
            array('name' => 'copropriété'),
            array('name' => 'entreprise'),
            array('name' => 'particulier'),
        ));

        Schema::create('structures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 250);
            $table->integer('type_id');
            $table->integer('contact_id')->nullable();
            $table->timestamps();
        });

        Schema::create('purchase_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 300);
            $table->timestamps();
        });

        DB::table('purchase_categories')->insert(array(
            array('name' => '0 - 2,9kWc'),
            array('name' => '3 - 5,9kWc'),
            array('name' => '6 - 8,9kWc'),
            array('name' => '9 - 35,9kWc'),
            array('name' => '36 - 99,9kWc'),
            array('name' => '100 - 249,9kWc (AO CRE)'),
            array('name' => '250 - 499,9kWc (AO CRE)'),
            array('name' => '> 500kWc (AO CRE)'),
        ));

        Schema::create('roof_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->timestamps();
        });

        DB::table('roof_types')->insert(array(
            array('name' => 'ardoise'),
            array('name' => 'autre (pécisions ds commentaires)'),
            array('name' => 'bac acier'),
            array('name' => 'carport (ombrière de parking)'),
            array('name' => 'fibro-ciment'),
            array('name' => 'serre (jardinerie, maraichage)'),
            array('name' => 'terrasse gravier'),
            array('name' => 'terrasse nue'),
            array('name' => 'terrasse végétalisée'),
            array('name' => 'tuile canal'),
            array('name' => 'tuile mécanique'),
            array('name' => 'zinc')
        ));

        Schema::create('quotes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('roof_id');
            $table->float('total_off')->nullable();
            $table->float('roi_off')->nullable();
            $table->float('total')->nullable();
            $table->float('roi')->nullable();
            $table->string('panel_type', 200)->nullable();
            $table->string('inverter_type', 200)->nullable();
            $table->string('guarantee', 250)->nullable();
            $table->string('certifications', 250)->nullable();
            $table->text('remarks')->nullable();
            $table->timestamps();
        });

        Schema::create('roofs', function (Blueprint $table) {
            $table->increments('id');
            $table->enum(
                'probability',
                array('acquise', 'forte', 'moyenne', 'faible')
            )->nullable();
            $table->integer('structure_id')->nullable();
            $table->integer('square_area')->nullable();
            $table->integer('power_max')->nullable();
            $table->integer('power_min')->nullable();
            $table->integer('purchase_category_id')->nullable();
            $table->integer('type_id');
            $table->integer('tilt_id')->nullable();
            $table->integer('south_orientation_id');
            $table->boolean('erp')->nullable();
            $table->integer('building_size')->nullable();
            $table->boolean('perimeter_abf')->nullable();
            $table->text('remarks')->nullable();
            $table->string('inverter_location')->nullable();
            $table->integer('inverter_distance')->nullable();
            $table->string('street', 250)->nullable();
            $table->string('zip', 250)->nullable();
            $table->string('city', 250)->nullable();
            $table->integer('department_id')->nullable();
            $table->float('latitude')->nullable();
            $table->float('longitude')->nullable();
            $table->integer('owner_id')->nullable(); // --> structureId
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tilts');
        Schema::dropIfExists('south_orientations');
        Schema::dropIfExists('departments');
        Schema::dropIfExists('contacts');
        Schema::dropIfExists('structure_types');
        Schema::dropIfExists('structures');
        Schema::dropIfExists('purchase_categories');
        Schema::dropIfExists('roof_types');
        Schema::dropIfExists('quotes');
        Schema::dropIfExists('roofs');
    }
}
