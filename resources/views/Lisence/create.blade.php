<!DOCTYPE html>
<html>
  <head>
    <title>
      
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
<form action="{{URL::to('create')}}" method="POST" style="padding: 150px;">
  @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">client id</label>
    <input type="text" class="form-control" id="exampleFormControlInput1"name="clientid" placeholder="client id">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">lisense key</label>
    <input type="text" class="form-control" id="exampleFormControlInput1"name="lisensekey" placeholder="lisense key">

  </div>
  <center><button type="submit" class="btn btn-success">Save</button></center>
 
   <div class="form-group">
    <label for="exampleFormControlSelect1">Example select</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>3</option>
      <option>6</option>
      <option>12</option>
      
    </select>
  </div>
  
  <center><button type="submit" class="btn btn-success">Create key</button></center>
 
 

</form>