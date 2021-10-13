<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->text('image')->default('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAn1BMVEX///9sPbduuv9kMLS9rd1rOLdltv9ouP9mM7VqObbt9v+Awv/4/P9itf9kLrSo1P+Hxf+h0f9xvP/Q5/+53P+32/95v/9gKLLRxefF4v/u9/+Zzf/V6v+Obcb39Pt1SbujitDq5PS5p9vi2vB+V7/39fvb0ezLveTi8P+Qyf+tmNWbgMxyRLuIZ8OTdMnFtuF8U77v6veFYcKghs9dILFQQA49AAAGN0lEQVR4nO2caVfqMBBApaUbS9gtiKwWFBABH///t73U2ifwEEiadCYh95Me/dB7Mplksj08GAwGg8FgMBgMBoMBDZVSq9NY1B+blmc1H+uLRqdVqkB/lDCeWrV603Vdz/OsBPoT/b1Zr7VK0B+Xnad23XL/qR1DPa16W2nJSq9cdc/b/bN0q+WeqvFaqtE2ugXXqqnYkKX+L7F5Pl77b9AfzEiFxS+J1r5Ssdpm9EvasQP92TfzVr6t/53ilhUJ1Q5HA6bNWIP++Bt4KvP6fTmWn6AFrvHM3YBpMz5DK1ymnc3vy7ENLXGJGl+KOcZF3Bn7IgSpYh9a5Df62UM0wUOq2BAlSBUb0DLnENIHUzD2xXZVoKBlVdFl1GeRLRjjIhsXS03BgpbVxFUz1sVlmRSvDi11iNAsk4Ip27yJzTIpVTzFVKZy4ne8MrRYSkeOIFVEUvU/SfKLwVEtCpytnYJj9laSkUdTXAyDorCK4hwYqgypTYiiEWsym5A2IviwXxE/IT2mCb0U3pPbhLQRe8CGEqbcJ4bAE/CSbEGqCJtr2nIzaYwLW+1LD1LoMK3IKZuOqUJm05b8IKVh2gI0lDzcJ4AO+uUcBC0LsBCu5CJoWXAd8S2PIKVhCrde08rJEC7VdPJIpaBjvsT1i0MA1zIWORkuwAxzmLN9GcLN2/IZDgEHxMpjToaPUAOiMTSGxhDeUP9cegfjof5zGv3npfrXFrksRIEuRelf4+u/TqP/WtsdrJfms+YNeUpR/30L/feeRNyvuGoIu3+o/x6w/vv4Dz3Z2dSFPouh/3ka/c9EST/XhuCEqfZnE+/gfKn+Z4Tv4Jy3vKkbnguz2t+3uIM7M/rfe7qDu2t3cP9Q/zukd3APWHCRgSvLpGh/H1/YoxGYn41o6P4uhqCRH0FZfwEBC1PA9yuuov0bQ7RazDSB8+pIKsKLdK48lXipAZFc3r4G93ttj4jKpSvo/uYepdJgfTfRa4AvbjNSYnGkfuoE6A/x+6W3SNL/UvL90i96Ze9KS9K/l6F3l7JRai8uvSPsLdR+Rzghfgvaq7qHnvFb0FWvXmupML7fSKnVbizKTS+mWV402jo8dG0wGAwGg8FgMBgMhv8Y7rrF5WoQjd4LThYK76NosFoWu7shtNIBk+5yPSKh7TtOEBSyEgSO49shGa3H3Qm0Wsx8GTnEzy52RtUnznY8B9Yb+6EUux/LkMBJ7qZR6Eu0S/HDaLoD8JuMC0Rm6x0SkGCcd5fcreT0vV8dffKRp+NuvM8jPI/x9+PcYnVayN/vyzGY5uL3EhEQvxgSvcgXXIZ59r9TgnAp2W8C2IAJJJKacV7pxBEax3mVJ7iEbsAEMpYl+BFCu31DPqT4DT9taLN/2J8SaqthBDMInsePhCsO3+FzzCFOQbDicIRLkCqOhCrOUIVogthAXeMTpIprcYIrHOPgKWQlSnCKZRw8JSyKEZzjGQdPsYUs4czeIYuJywTvIrLNB8Ysk+ILmL+9Yu2ECWHmQmOIN0QTgqxxusIcozF+xiFjjnMkPIRky6ef2IOUhulnFkHkaSYhU7KB/vgb4Rfc4O+FMWTDbbjF3wtjgi2vYFeNJqSN2OU0XGOr63/D4awUJ6o0IW1EvnXwJfbpzA8+324G9GczwSM4V2G0Twl5pm5jdYKUhumYwxD6oxlhF3xRJ5PGEPbN4Sne9adz2Oxb/ANVhvsEZ8AqOBxBfzMjoxmjoWLdkKMjvipnyFoHKzRlS2CeuH2olWhoqmFcG65EahS/PwQR24sFs4JyhgW2ZLpTadqdELKdXHxR0JBtuOgqaMhWQCk3HDIPiIqslB7CuGpaVNCQbVO/qFbtFGMbw2P074fKLOj/wLi0P1FwPGRb956pNi0tBAFjka/YMg3HQo1iS20ci20T1Qx95u0nBU5hHBKwbyEqNl7wbAMrsomfwLWVP99DfzYDe66DUX/USTb2Hx7Bh9lWlTHR2bIu6X8zUWVVmH2kSHnZq5BtAq4t7m/mAf5AdYJMxy8nW+zpxt5mvFNaWaGO1GC/4kwyB8wjgjVUAxKJeTOju7ZtfJKOTda8J/b+ZzIdkJAQYuOAfklIBlPRl7on3c2miIPNBsfbPAaDwWDQhr8zML+y8WQ5VAAAAABJRU5ErkJggg==');
            $table->boolean('is_admin')->default(false);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
