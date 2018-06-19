<?php namespace EventSourcery\EventSourcery\PersonalData;

interface PersonalCryptographyStore {

    /**
     * add a person (identified by personal key) and their cryptographic details
     *
     * @param PersonalKey $person
     * @param CryptographicDetails $crypto
     */
    function addPerson(PersonalKey $person, CryptographicDetails $crypto): void;

    /**
     * get cryptography details for a person (identified by personal key)
     *
     * @param PersonalKey $person
     * @return CryptographicDetails
     */
    function getCryptographyFor(PersonalKey $person): CryptographicDetails;

    /**
     * remove cryptographic details for a person (identified by personal key)
     *
     * @param PersonalKey $person
     */
    function removePerson(PersonalKey $person): void;
}