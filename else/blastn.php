<?php 
    // get sequence
    $sequence = $_POST['sequence'];
    // search empty
    if (empty($sequence)) {
    echo 'Please enter a sequence.';
    } else {
        // sequence to fasta
        $file = fopen('sequence.fasta', 'w');
        fwrite($file, ">query\n");
        fwrite($file, $sequence);
        fclose($file);
        //blastn
        // 1.makeblastdb -in gene.fa -dbtype nucl -out gene
        exec("makeblastdb -in /homestudent/lampp/htdocs/students/2022E8006285020/data/gene.fa -dbtype nucl -out /homestudent/lampp/htdocs/students/2022E8006285020/data/gene");
        // 2.blastn -db gene -query sequence.fa
        $output = shell_exec("blastn -db /homestudent/lampp/htdocs/students/2022E8006285020/data/gene -query /homestudent/lampp/htdocs/students/2022E8006285020/else/sequence.fasta");
        echo "<pre>$output</pre>";
        }
    ?>

