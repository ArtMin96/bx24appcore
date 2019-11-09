<?php

namespace Bitrix24;

class Crm
{
    private $webhook = '';

    function __construct($webhook)
    {
        return $this->webhook = $webhook;
    }

    private function restCommand($method, $params = array()){

        $queryUrl  = $this->webhook . $method;
        $queryData = http_build_query($params);
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_POST           => 1,
            CURLOPT_HEADER         => 0,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL            => $queryUrl,
            CURLOPT_POSTFIELDS     => $queryData,
        ));
        $result = curl_exec($curl);
        curl_close($curl);
        $result = json_decode($result, 1);
        return $result;
    }


    public function getContacts($params = array()){
        return $this->restCommand('crm.contact.list', $params);
    }

    public function getContactUserFields($params = array()){
        return $this->restCommand('crm.contact.userfield.list', $params);
    }

    public function getCompanies($params = array()){
        return $this->restCommand('crm.company.list', $params);
    }

    public function getCompanyUserFields($params = array()){
        return $this->restCommand('crm.company.userfield.list', $params);
    }

    public function getDeals($params = array()){
        return $this->restCommand('crm.deal.list');
    }

    public function getDealUserFields(){
        return $this->restCommand('crm.deal.userfield.list ');
    }

    public function getLeads($params = array()){
        return $this->restCommand('crm.lead.list', $params);
    }

    public function getLeadUserFields($params = array()){
        return $this->restCommand('crm.lead.userfield.list', $params);
    }

    public function getUserfields(){
        return $this->restCommand('crm.userfield.fields', $params);
    }

    public function requisite($params = array()){
        return $this->restCommand('crm.requisite.list', $params);
    }

}