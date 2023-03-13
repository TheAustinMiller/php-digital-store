<form action='http://localhost/practice/assignment1/index.php' method='post'>
    <h3>Digital Store </h3>
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
                <option value="">Select an operating system</option>
                <option value='win'>Windows</option>
                <option value='mac'>Mac</option>
                <option value='lin'>Linux</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Processor: </td>
            <td>
                <select name='processor' >
                <option value="0.0">Intel i5</option>
                <option value="300.0">Intel i7</option>
                <option value="400.0">AMD Ryzen</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Memory: </td>
            <td>
                <input type='radio' name='memory' value="0.0" checked="checked">8gb
                <input type='radio' name='memory' value="100.0">16gb
                <input type='radio' name='memory' value="200.0">32gb
                <input type='radio' name='memory' value="400.0">64gb
                <input type='radio' name='memory' value="800.0">128gb
            </td>
        </tr>
        <tr>
            <td>Hard Disk: </td>
            <td>
                <select name="harddisk">
                    <option selected="selected" value="0.0">1TB</option>
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
                <input type='checkbox' name='accessories[]' value="69" />Backup Battery Pack
                <input type='checkbox' name='accessories[]' value="49.99" />Wireless Mouse
                <input type='checkbox' name='accessories[]' value="79.0" />Webcam
                <input type='checkbox' name='accessories[]' value="69.0" />Headset
                <input type='checkbox' name='accessories[]' value="42.99" />Presentation Clicker
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
</body>
</html>
</form>





