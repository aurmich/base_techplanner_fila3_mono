<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;
use Modules\Xot\Datas\XotData;

<<<<<<< HEAD
return new class extends XotBaseMigration {
=======
<<<<<<< HEAD
return new class extends XotBaseMigration {
=======
return new class extends XotBaseMigration
{
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
>>>>>>> origin/master
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $xot = XotData::make();
        $userClass = $xot->getUserClass();
        // -- CREATE --
        $this->tableCreate(
            static function (Blueprint $table) use ($userClass): void {
                // $table->uuid('id')->primary();
                $table->id();
                $table->foreignIdFor($userClass, 'user_id');
                $table->string('provider');
                $table->string('provider_id');
                $table->text('token')->nullable();
                $table->string('name')->nullable();
                $table->string('email')->nullable();
                $table->string('avatar')->nullable();
                /*
                $table->unique([
                    'provider',
                    'provider_id',
                ]);
                */
            }
        );

        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table): void {
                // if (! $this->hasColumn('email')) {
                //    $table->string('email')->nullable();
                // }
<<<<<<< HEAD
                if ('varchar' == $this->getColumnType('token')) {
=======
<<<<<<< HEAD
                if ('varchar' == $this->getColumnType('token')) {
=======
                if ($this->getColumnType('token') == 'varchar') {
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
>>>>>>> origin/master
                    $table->text('token')->nullable()->change();
                }
                $this->updateTimestamps($table);
                // $this->updateUser($table);
            }
        );
    }
};
