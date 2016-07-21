public function Show_Data_Paq_122_html($IDMuestra, $Paq) {
        //setlocale(LC_ALL,"es_ES"); echo  strftime("%A %d de %B del %Y");

        ?>
            <tr>
                <td style="width: 65%; text-align: center; border: 1px solid black;">Nitrogeno (N Total)</td>
                    <?php 

                            $rsNitrogeno = $this->Get_FechasFolios_Determinacion($IDMuestra, $Paq, 54);
                            $fechaNitrogeno = date_create($rsNitrogeno->fields[0]);

                    ?>
                <td style="width: 30%; text-align: center; border: 1px solid black;"><?php echo date_format($fechaNitrogeno, 'd/M/y');  ?></td>
            </tr>
               <tr>
                <td style="width: 65%; text-align: center; border: 1px solid black;">Fosforo (P)</td>
                <?php 

                            $rsFosforo = $this->Get_FechasFolios_Determinacion($IDMuestra, $Paq, 56);
                            $fechaFosforo = date_create($rsFosforo->fields[0]);

                    ?>
                <td style="width: 30%; text-align: center; border: 1px solid black;"><?php echo date_format($fechaFosforo, 'd/m/y') ?></td>
            </tr>
            <tr>
                <td style="width: 65%; text-align: center; border: 1px solid black;">Potasio (k)</td>
                <?php 

                            $rsPotasio = $this->Get_FechasFolios_Determinacion($IDMuestra, $Paq, 17);
                            $fechaPotasio = date_create($rsPotasio->fields[0]);

                    ?>
                <td style="width: 30%; text-align: center; border: 1px solid black;"><?php echo date_format($fechaPotasio, 'd/m/y') ?></td>
            </tr>
        <?php
       
     }




        public function Show_Data_Paq_123_html($IDMuestra, $Paq) {
            ?>

             <tr>
                <td style="width: 65%; text-align: center; border: 1px solid black;">Calcio</td>
                    <?php 

                            $rsCalcio = $this->Get_FechasFolios_Determinacion($IDMuestra, $Paq, 14);
                            $fechaCalcio = date_create($rsCalcio->fields[0]);

                    ?>
                <td style="width: 30%; text-align: center; border: 1px solid black;"><?php echo date_format($fechaCalcio, 'd/m/y');  ?></td>
            </tr>
              <tr>
                <td style="width: 65%; text-align: center; border: 1px solid black;">Magnesio (Mg)</td>
                    <?php 

                            $rsManganesio = $this->Get_FechasFolios_Determinacion($IDMuestra, $Paq, 15);
                            $fechaMagnesio = date_create($rsManganesio->fields[0]);

                    ?>
                <td style="width: 30%; text-align: center; border: 1px solid black;"><?php echo date_format($fechaMagnesio, 'd/m/y');  ?></td>
            </tr>
             <tr>
                <td style="width: 65%; text-align: center; border: 1px solid black;">Sodio (Na)</td>
                    <?php 

                            $rsSodio = $this->Get_FechasFolios_Determinacion($IDMuestra, $Paq, 16);
                            $fechaSodio = date_create($rsSodio->fields[0]);

                    ?>
                <td style="width: 30%; text-align: center; border: 1px solid black;"><?php echo date_format($fechaSodio, 'd/m/y');  ?></td>
            </tr>
            <tr>
                <td style="width: 65%; text-align: center; border: 1px solid black;">Azufre (S)</td>
                    <?php 

                            $rsAzufre = $this->Get_FechasFolios_Determinacion($IDMuestra, $Paq, 19);
                            $fechaAzufre = date_create($rsAzufre->fields[0]);

                    ?>
                <td style="width: 30%; text-align: center; border: 1px solid black;"><?php echo date_format($fechaAzufre, 'd/m/y');  ?></td>
            </tr>
            <?php
       
      
    }




     public function Show_Data_Paq_124_html($IDMuestra, $Paq) {


          ?>
            <tr>
                <td style="width: 65%; text-align: center; border: 1px solid black;">Cobre (Cu)</td>
                    <?php 

                            $rsCobre = $this->Get_FechasFolios_Determinacion($IDMuestra, $Paq, 23);
                            $fechaCobre = date_create($rsCobre->fields[0]);

                    ?>
                <td style="width: 30%; text-align: center; border: 1px solid black;"><?php echo date_format($fechaCobre, 'd/m/y');  ?></td>
            </tr>
               <tr>
                <td style="width: 65%; text-align: center; border: 1px solid black;">Hierro (Fe)</td>
                 <?php 

                            $rsHierro = $this->Get_FechasFolios_Determinacion($IDMuestra, $Paq, 20);
                            $fechaHierro = date_create($rsHierro->fields[0]);

                    ?>
                <td style="width: 30%; text-align: center; border: 1px solid black;"><?php echo  date_format($fechaHierro, 'd/m/y'); ?></td>
            </tr>
            <tr>
                <td style="width: 65%; text-align: center; border: 1px solid black;">Manganeso (Mn)</td>
                 <?php 

                            $rsManganeso = $this->Get_FechasFolios_Determinacion($IDMuestra, $Paq, 21);
                            $fechaManganeso = date_create($rsManganeso->fields[0]);

                    ?>
                <td style="width: 30%; text-align: center; border: 1px solid black;"><?php echo date_format($fechaManganeso, 'd/m/y'); ?></td>
            </tr>
             <tr>
                <td style="width: 65%; text-align: center; border: 1px solid black;">Zinc (Zn)</td>
                 <?php 

                            $rsZinc = $this->Get_FechasFolios_Determinacion($IDMuestra, $Paq, 22);
                            $fechaZinc = date_create($rsZinc->fields[0]);

                    ?>

                <td style="width: 30%; text-align: center; border: 1px solid black;"><?php  echo date_format($fechaZinc, 'd/m/y');  ?></td>
            </tr>
             <tr>
                <td style="width: 65%; text-align: center; border: 1px solid black;">Boro (B)</td>
                 <?php 

                            $rsBoro = $this->Get_FechasFolios_Determinacion($IDMuestra, $Paq, 25);
                            $fechaBoro = date_create($rsBoro->fields[0]);

                    ?>
                <td style="width: 30%; text-align: center; border: 1px solid black;"><?php echo date_format($fechaBoro, 'd/m/y') ?></td>
            </tr>
            <tr>
                <td style="width: 65%; text-align: center; border: 1px solid black;">Molibdeno (Mo)</td>
                 <?php 

                            $rsMolibdeno = $this->Get_FechasFolios_Determinacion($IDMuestra, $Paq, 112);
                            $fechaMolibdeno = date_create($rsMolibdeno->fields[0]);

                    ?>
                <td style="width: 30%; text-align: center; border: 1px solid black;"><?php echo date_format($fechaMolibdeno, 'd/m/y') ?></td>
            </tr>
            <tr>
                <td style="width: 65%; text-align: center; border: 1px solid black;">Niquel (Ni)</td>
                 <?php 

                            $rsNiquel = $this->Get_FechasFolios_Determinacion($IDMuestra, $Paq, 108);
                            $fechaNiquel = date_create($rsNiquel->fields[0]);

                    ?>
                <td style="width: 30%; text-align: center; border: 1px solid black;"><?php echo date_format($fechaNiquel, 'd/m/y') ?></td>
            </tr>
        <?php


       
       
       
    }