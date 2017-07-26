<!DOCTYPE html>
<html lang="en">
	<head>
		<title>ِAdmin | Add</title>
		<meta charset="utf-8" lang="en">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	</head>
  <style>
    body{
      margin:0 auto;
      background-color:#ECF0F1;
    }
    div{
      width:60%;
      margin:0 auto;
      padding:20px;
      background-color:white;
    }
    input, textarea{
      display: inline-block;
      width: 100%;
      padding: 5px;
      margin: 10px 0;
    }
    input[type="submit"]{
      width: 10%;
    }
    .error{
      width:60%;
      border: 1px solid #fafafa;
      background-color: #2ecc71;
      padding: 20px;
      margin: 15px auto;
    }
  </style>
  <body>
    <div>
      <h2>Add a post</h2>
      <form method="post">
        <label for="title">Title: (20-50)</label>
        <input type="text" name="title" value="<?php echo Input::get('title')?>" required>
        <label for="slug">Slug: (10-30)</label>
        <input type="text" name="slug" value="<?php echo Input::get('slug')?>" required>
        <label for="tags">Tags:</label>
        <input type="text" name="tags" value="<?php echo Input::get('tags')?>" required>
        <label for="body">The content:</label>
        <textarea name="body" rows="16" cols="100" required><?php echo escape(Input::get('body'))?></textarea>
        <input type="submit" value="Add">
      </form>
    </div>
  </body>
