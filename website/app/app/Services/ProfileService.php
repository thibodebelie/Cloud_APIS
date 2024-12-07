<?php

namespace App\Services;

use Artisaninweb\SoapWrapper\SoapWrapper;

class ProfileService
{
    protected $soapWrapper;

    public function __construct(SoapWrapper $soapWrapper)
    {
        $this->soapWrapper = $soapWrapper;

        $this->soapWrapper->add('profile_service', function ($service) {
            $service
                ->wsdl('http://user_soap_api:5109/profile?wsdl') // Update this to the correct SOAP API endpoint
                ->trace(true)
                ->cache(WSDL_CACHE_NONE);
        });
    }

    public function getAllProfiles()
    {
        // Call the SOAP API method
        $response = $this->soapWrapper->call('profile_service.GetAllProfiles');
        
        // Ensure the response is parsed correctly
        $profiles = $response->GetAllProfilesResult->Profile ?? [];
        
        // Convert to array if needed
        return is_array($profiles) ? $profiles : [$profiles];
    }
    
    public function createProfile(array $profileData)
    {
        $params = [
            'profile' => [
                'Address' => $profileData['Address'],
                'Birthdate' => $profileData['Birthdate'],
                'Email' => $profileData['Email'],
                'Id' => $profileData['Id'], // Ensure ID is unique if required
                'Name' => $profileData['Name'],
                'Phone' => $profileData['Phone'],
            ],
        ];

        return $this->soapWrapper->call('profile_service.CreateProfile', [$params]);
    }
}
