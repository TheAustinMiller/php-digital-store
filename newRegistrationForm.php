
<!doctype html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <link rel="stylesheet" href="W1_OnlineWebForm.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Week 1 HTML Form </title>
</head>
<body class='container'>


<h3>Digital Store </h3>
 <form>
    <table>
    <thead>
        <tr>
            <th colspan="2">Configure your system!</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Select an operating system: </td>
            <td><!-- include a drop-down menu -->
                <select name='os' >
                <option value='1'>Windows</option>
                <option value='2'>Mac</option>
                <option value='3'>Linux</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Processor: </td>
            <td>
                <select name='processor' >
                <option value="0">Intel i5</option>
                <option value="300">Intel i7</option>
                <option value="400">AMD Ryzen</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Memory: </td>
            <td>
                <input type='radio' name='memory' value="0" checked="checked">8gb
                <input type='radio' name='memory' value="100">16gb
                <input type='radio' name='memory' value="200">32gb
                <input type='radio' name='memory' value="400">64gb
                <input type='radio' name='memory' value="800">128gb
            </td>
        </tr>
        <tr>
            <td>Hard Disk: </td>
            <td>
                <select name="hd" >
                    <option selected="selected" value="0">1TB</option>
                    <option value="44.99">2TB</option>
                    <option value="109.99">4TB</option>
                    <option value="229.99">8TB</option>
                    <option value="279.99">10TB</option>
                 </select>
            </td>
            
        </tr>
        <tr>
            <td>Accessories:</td>
            <td>
                <input type='checkbox' name='accessories' value="69" />Backup Battery Pack
                <input type='checkbox' name='accessories' value="49.99" />Wireless Mouse
                <input type='checkbox' name='accessories' value="79" />Webcam
                <input type='checkbox' name='accessories' value="69" />Headset
                <input type='checkbox' name='accessories' value="42.99" />Presentation Clicker
            </td>
        </tr>
    </tbody>
    </table>

    <table>
        <thead>
            <tr>
                <th colspan="2">Contact Information</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Name: </td>
                <td><input type='text' name='fullname'
                    placeholder='Enter full name' />
                </td>
            </tr>
            <tr>
                <td>Email: </td>
                <td><input type='text' name='email'
                    placeholder='Enter email' />
                </td>
            </tr>
        </tbody>
    </table>

    <table>
        <thead>
            <tr>
                <th colspan="2">Special instructions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <textarea name='comments' cols="50" rows="6"></textarea>
                </td>
            </tr>
        </tbody>
    </table>
  <button type='submit' >Finalize Sale</button>
  <button type='reset' >Cancel</button>
 </form>
</body>
</html>