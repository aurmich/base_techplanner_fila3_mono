<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\User\Models\OauthClient;
use Modules\Xot\Database\Migrations\XotBaseMigration;
use Modules\Xot\Datas\XotData;

<<<<<<< HEAD
return new class extends XotBaseMigration {
=======
return new class extends XotBaseMigration
{
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
    public function up(): void
    {
        $xot = XotData::make();
        $userClass = $xot->getUserClass();
        $this->tableCreate(
            static function (Blueprint $table) use ($userClass): void {
                $table->string('id', 100)->primary();
                // $table->unsignedBigInteger('user_id')->index();
                // $table->unsignedBigInteger('client_id');
                $table->foreignIdFor($userClass, 'user_id')->nullable()->index();
                // $table->unsignedBigInteger('client_id');
                $table->foreignIdFor(OauthClient::class, 'client_id')->nullable()->index();
                $table->text('scopes')->nullable();
                $table->boolean('revoked');
                $table->dateTime('expires_at')->nullable();
            }
        );

        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table): void {
                $this->updateUser($table);
                // $this->updateTimestamps($table,true);
            }
        );
    }
};
