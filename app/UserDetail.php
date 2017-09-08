<?php
namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserDetail extends Authenticatable
{
    //use HasRoleAndPermission;
    use Notifiable;
    //use SoftDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'user_details';

    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
		'user_id',
        'answer',
		'insurance_planning',
        'health_care_planning',
        'financial_planning',
        'legal_planning',
        'future_planning',
        'funeral_wishes',
        'life_partner',
        'children',
        'children_years_old1',
        'children_years_old2',
        'email_address',
        'personal_message',
		'sharing_information',
		'information_first_name',
		'information_last_name',
		'financial_accounts',
		'insurance',
		'estate_planning',
		'assets',
		'digital_life',
		'legacy_plan',
		'loans',
		'dependents',
		'eldercare',
		'taxes_credit',
		'charity_giving',
		'personal'
    ];
}
