<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\od_details
 *
 * @property-read \App\od_menus $od_menus
 * @property-read \App\od_receipt $od_receipt
 * @mixin \Eloquent
 * @property int $receipt_id
 * @property int $menu_id
 * @property int $num
 * @property string $nick_name
 * @property int $costed
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_details whereCosted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_details whereMenuId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_details whereNickName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_details whereNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_details whereReceiptId($value)
 */
	class od_details extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @mixin \Eloquent
 */
	class User extends \Eloquent {}
}

namespace App{
/**
 * App\od_receipt
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\od_details[] $od_details
 * @property-read \App\od_stores $od_stores
 * @property-read \App\od_users $od_users
 * @mixin \Eloquent
 * @property int $id
 * @property int $user_id
 * @property int $store_id
 * @property string $uni_number
 * @property string $create_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_receipt whereCreateAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_receipt whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_receipt whereStoreId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_receipt whereUniNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_receipt whereUserId($value)
 */
	class od_receipt extends \Eloquent {}
}

namespace App{
/**
 * App\od_food
 *
 * @property-read \App\od_menus $od_menus
 * @mixin \Eloquent
 * @property int $menu_id
 * @property float $cal
 * @property int $g
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_food whereCal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_food whereG($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_food whereMenuId($value)
 */
	class od_food extends \Eloquent {}
}

namespace App{
/**
 * App\od_stores
 *
 * @property-read \App\od_menus $od_menus
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\od_receipt[] $od_receipt
 * @property-read \App\od_users $od_users
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property string $address
 * @property string $phone
 * @property int $user_id
 * @property string $create_at
 * @property string $modify_at
 * @property string $classify
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_stores whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_stores whereClassify($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_stores whereCreateAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_stores whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_stores whereModifyAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_stores whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_stores wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_stores whereUserId($value)
 */
	class od_stores extends \Eloquent {}
}

namespace App{
/**
 * App\od_menus
 *
 * @property-read \App\od_food $od_food
 * @property-read \App\od_stores $od_stores
 * @mixin \Eloquent
 * @property int $id
 * @property int $store_id
 * @property int $sort
 * @property string $classify
 * @property string $food_name
 * @property int $cost
 * @property string $create_at
 * @property string $modify_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_menus whereClassify($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_menus whereCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_menus whereCreateAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_menus whereFoodName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_menus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_menus whereModifyAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_menus whereSort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_menus whereStoreId($value)
 */
	class od_menus extends \Eloquent {}
}

namespace App{
/**
 * App\od_users
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\od_stores[] $od_stores
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property string $username
 * @property string $password
 * @property string $phone
 * @property string $email
 * @property int $authority
 * @property string $create_at
 * @property string $modify_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_users whereAuthority($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_users whereCreateAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_users whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_users whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_users whereModifyAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_users whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_users wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_users wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\od_users whereUsername($value)
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 */
	class od_users extends \Eloquent {}
}

