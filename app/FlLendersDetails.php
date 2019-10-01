<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class FlLendersDetails extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lender_id',
        'company_name',
        'logo',
        'description',
        'address_one',
        'address_two',
        'customer_service_phone',
        'city',
        'zip',
        'country_id',
        'website',
        'commission',
        'signing_date',
        'payment_terms',
        'web_api',
        'leads',
        'lending_products',
        'response_time',
        'process_time',
        'interest_rate',
        'loan_size',
        'additional_fees',
        'lender_industry',
        'business_structure',
        'loan_countries',
        'annual_revenue',
        'revenue_amount',
        'profitable',
        'minmax_length',
        'additional_documents',
        'secured_loans',
        'unsecured_loans',
        'online_accounting',
        'loan_requirement',

				'lender_id_status',
        'company_name_status',
        'logo_status',
        'description_status',
        'address_one_status',
        'address_two_status',
        'customer_service_phone_status',
        'city_status',
        'zip_status',
        'country_id_status',
        'website_status',
        'commission_status',
        'signing_date_status',
        'payment_terms_status',
        'web_api_status',
        'leads_status',
        'lending_products_status',
        'response_time_status',
        'process_time_status',
        'interest_rate_status',
        'loan_size_status',
        'additional_fees_status',
        'lender_industry_status',
        'business_structure_status',
        'loan_countries_status',
        'annual_revenue_status',
        'revenue_amount_status',
        'profitable_status',
        'minmax_length_status',
        'additional_documents_status',
        'secured_loans_status',
        'unsecured_loans_status',
        'online_accounting_status',
        'loan_requirement_status',
    ];

    //User Roles Relations
    public function lender(){
        return $this->belongsTo(Lender::class, 'lender_id', 'id');
    }

    //User Roles Relations
    public function country(){
        return $this->hasOne(FlCountry::class, 'id', 'country_id');
    }

    //User Roles Relations
    public function loan(){
        return $this->hasOne(FlClientsLoan::class, 'lender_id', 'lender_id');
    }

    //User Roles Relations
    public function loanPurpose(){
        return $this->hasOne(FlLoansPurpose::class, 'id', 'lending_products');
    }

    //User Roles Relations
    public function response(){
        return $this->hasOne(FlResponseTime::class, 'id', 'response_time');
    }

    //User Roles Relations
    public function process(){
        return $this->hasOne(FlProcessTime::class, 'id', 'process_time');
    }

    //User Roles Relations
    public function industry(){
        return $this->hasOne(FlIndustries::class, 'id', 'lender_industry');
    }

    //User Roles Relations
    public function structure(){
        return $this->hasOne(FlBusinessStructure::class, 'id', 'business_structure');
    }

    //User Roles Relations
    public function minmax(){
        return $this->hasOne(FlLoansDuration::class, 'id', 'minmax_length');
    }

}
