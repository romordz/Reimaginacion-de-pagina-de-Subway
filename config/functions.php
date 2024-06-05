<?php
function check_login($conn)
{
    if(isset($_SESSION['id']))
    {
        $id = $_SESSION['id'];
        $query = "SELECT * FROM users WHERE id = '$id' LIMIT 1";
        
        $result = mysqli_query($conn,$query);
        if($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }
    else{
        return null;
    }
    die;
}
function updateStarter($conn)
{
    if(isset($_SESSION['id']))
    {
        $id = $_SESSION['id'];
        $query = "UPDATE users SET Starter = false WHERE id = '$id'";
        mysqli_query($conn, $query);
    }
    else{
        return null;
    }
    die;
}
function getPopularProducts($conn)
{
    $query = "SELECT * FROM products ORDER BY Vendidos DESC LIMIT 4";
        
    $result = mysqli_query($conn,$query);
    if($result && mysqli_num_rows($result) > 0)
    {
        return $result;
    }
    else{
        return null;
    }
}
function getProducts($conn)
{
    $query = "SELECT * FROM products";
        
    $result = mysqli_query($conn,$query);
    if($result && mysqli_num_rows($result) > 0)
    {
        return $result;
    }
    else{
        return null;
    }
}

function getSandwichProducts($conn)
{
    $query = "SELECT * FROM products WHERE Tipo = 'Sandwich'";
        
    $result = mysqli_query($conn,$query);
    if($result && mysqli_num_rows($result) > 0)
    {
        return $result;
    }
    else{
        return null;
    }
}

function getSaladProducts($conn)
{
    $query = "SELECT * FROM products WHERE Tipo = 'Ensalada'";
        
    $result = mysqli_query($conn,$query);
    if($result && mysqli_num_rows($result) > 0)
    {
        return $result;
    }
    else{
        return null;
    }
}

function getDrinkProducts($conn)
{
    $query = "SELECT * FROM products WHERE Tipo = 'Bebida'";
        
    $result = mysqli_query($conn,$query);
    if($result && mysqli_num_rows($result) > 0)
    {
        return $result;
    }
    else{
        return null;
    }
}

function getExtraProducts($conn)
{
    $query = "SELECT * FROM products WHERE Tipo = 'Extra'";
        
    $result = mysqli_query($conn,$query);
    if($result && mysqli_num_rows($result) > 0)
    {
        return $result;
    }
    else{
        return null;
    }
}
?>