<?php
    namespace DAOJSON;

    use Models\User as User;

    interface IUserDAO
    {
        function getByUserName($userName);
    }
?>