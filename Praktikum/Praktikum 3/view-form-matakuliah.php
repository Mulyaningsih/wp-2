<head>
<title> From Input Mata Kuliah </title>
</head>
<body>
        <center>
                <from action="<?=base_url('matakuliah'); ?>
                " method= "post">
                 <table> 
                        <tr>
                                <th colspan="3"> 
                                 From Input Data Mata Kuliah 
                                </th>
                         </tr>

                         <tr>
                                <td colspan="3">        
                                <hr></td>
                        </tr>

                        <tr>
                                <th>Kode MatKul</th>
                                <th>:</th>
                                <td>
                                        <input type="text" name= "kode" id="kode">
                                </td>
                        </tr>
        
                        <tr>
                                <th>Nama MatKul</th>
                                <th>:</th>
                                <td>
                                        <input type="text" name= "nama" id="nama">
                                </td>
                        </tr>
        
                        <tr>
                                <th>SKS</th>
                                <td>:</td>
                                <td>
                                        <select name="SKS" id="sks">
                                                <option value="">Pilih SKS</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                        </select>
                                </td>
                        </tr>
                        <tr>
                                <th colspan="3" aligin="center">
                                        <input type="submit" value="submit">
                                </th>
                        </tr>
                 </table>
                </from>
        </center>
</body>
</html>
        
        
