<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CONSTANCIA DE INSCRIPCIÓN EN EL REGISTRO NACIONAL DE GRADOS Y
        TÍTULOS</title>
    <style>
        @page {
            margin-top: 0cm;
            margin-bottom: 0.1cm;
        }

        header {
            position: fixed;

        }

        .verticalText {
            word-wrap: break-word;
            width: 8px;
            /*  writing-mode: vertical-lr;
            transform: rotate(90deg); */
        }

        .header {
            position: fixed;
            margin-top: 4cm;
        }

        .page-break {
            page-break-after: always;
        }

        table {
            page-break-inside: avoid !important;
        }

    </style>
    <link href="{{ asset('/css/eventpdfy.css') }}" rel="stylesheet">
</head>

<body style="margin-top:5.6cm;">
    <header>
        <div class="mt-5">
            <p class="text-center">
                <img class="text-center" src="{{ asset('/images/drea/header_dgp.png') }}" height="135px">
            </p>
        </div>
    </header>

    <table class="table table-bordered  header">
        <thead>
            <tr>
                <th colspan="2">
                    <p class="text-center" style="font-size:16px;margin:0px;">
                        CONSTANCIA DE INSCRIPCIÓN EN EL REGISTRO NACIONAL DE GRADOS Y TÍTULOS
                    </p>
                </th>
            </tr>

        </thead>
    </table>

    <table class="table table-borderless table-sm " style="margin: 0px">
        <tbody class=" ">
            <tr>
                <td colspan="2">
                    <p style=" font-size:14px; text-align: justify;
                    text-justify: inter-word;">
                        La Dirección de Documentación e Información Universitaria y Registro de Grados y Títulos, a
                        través del Jefe de
                        la Unidad de Registro de Grados y Títulos, deja constancia que la información contenida en este
                        documento se
                        encuentra previamente inscrita en el Registro Nacional de Grados y Títulos administrada por la
                        Sunedu.
                    </p>
                </td>
            </tr>
        </tbody>

    </table>
    @foreach ($students as $full_name => $studentdetails)
    <table class="table table-bordered" style=" font-size:14px; border-top:2px solid black; border-bottom:2px solid black; 
    border-right:2px solid black; border-left:2px solid black;">
        <tbody class="table-sm mt-5">
            
                <tr>
                    <th colspan="2" class="table-dark" {{-- style="color:#3B82F6;" --}}>
                        INFORMACIÓN DEL TITULADO
                    </th>

                </tr>
                <tr>
                    <th scope="col" style="width:35%">
                        Nombre Completo:

                    </th>
                    <td>
                        {{ $full_name }}
                    </td>

                </tr>
                <tr>
                    <th>
                        Tipo de Documento de Identidad:
                    </th>
                    <td>
                        {{ $student->document_type }}
                    </td>
                </tr>
                <tr>
                    <th>
                        Número de Documento de Identidad:
                    </th>
                    <td>
                        {{ $student->document_number }}
                    </td>
                </tr>
        </tbody>

    </table>


    @foreach ($studentdetails as $studentdetail)
        <table class="table table-bordered " style=" font-size:14px; border-top:2px solid black; border-bottom:2px solid black; 
            border-right:2px solid black; border-left:2px solid black;">
            <tbody class="table-sm mt-5">

                <tr>
                    <th colspan="2" class="table-dark" {{-- style="color:#3B82F6;" --}}>
                        INFORMACIÓN DE LA INSTITUCIÓN
                    </th>

                </tr>
                <tr>
                    <th style="width:35%">
                        Nombre:
                    </th>
                    <td>
                        {{ $studentdetail->institute->name }}
                    </td>
                </tr>
                <tr>
                    <th>
                        Tipo de Instituto:
                    </th>
                    <td>
                        {{ $studentdetail->institute->type }}
                    </td>
                </tr>
                <tr>
                    <th>
                        Código Modular:
                    </th>
                    <td>
                        {{ $studentdetail->institute->modular }}
                    </td>
                </tr>
                <tr>
                    <th>
                        <p style="margin-bottom: 0px;margin-top:0px;">
                            Dirección:
                        </p>
                    </th>
                    <td>
                        {{ $studentdetail->institute->address }}
                    </td>
                </tr>


                <tr>
                    <th colspan="2" class="table-dark" {{-- style="color:#3B82F6;" --}}>
                        INFORMACIÓN DE TÍTULO
                    </th>

                </tr>
                <tr>
                    <th>
                        Título:
                    </th>
                    <td>
                        {{ $studentdetail->title_name }}
                    </td>
                </tr>
                <tr>
                    <th>
                        Número del Título:
                    </th>
                    <td>
                        {{ $studentdetail->title_number }}
                    </td>
                </tr>
                <tr>
                    <th>
                        Nivel del Título:
                    </th>
                    <td>
                        {{ $studentdetail->title_level }}
                    </td>
                </tr>
                <tr>
                    <th>
                        Fecha del Título:
                    </th>
                    <td>
                        {{ $studentdetail->title_date_formated }}
                    </td>
                </tr>
                {{-- <tr>
                                <th>
                                    Resolución del Título:
                                </th>
                                <td>
                                    {{ $studentdetail->title_resnumber }}
                                </td>
                            </tr> --}}
            </tbody>
        </table>
    @endforeach
    <table class="table table-borderless" style="margin-bottom: 0px">
        <tr>
            <th scope="col-6" width="50%" class="text-center">

                <img style="border:1px solid black;padding: 20px;"
                    src="data:image/png;base64, {{ base64_encode(QrCode::size(100)->generate(route('students.pdf', $student->hashid))) }} ">


                <p style="font-size:10px;">
                    Codigo Único: {{ $student->hashid }}
                </p>
            </th>
            <th scope="col-6" style="">

                <p class="text-center" style="margin-top: 100px;font-size:12px; border-top:1px solid black;">
                    FIRMA DEL RESPONSABLE
                </p>

            </th>

        </tr>
    </table>
    @endforeach
    <div style="page-break-after:auto;">
        <script type="text/php">
            if (isset($pdf)) {
            $x = 10;
            $y = 820;
            $text = "Página {PAGE_NUM} de {PAGE_COUNT} " . "| Fecha de Impresión: "  . date('d/m/Y') . " | Identificador: " . "{{ $student->hashid }}";
            $date = date('d/m/Y');
            $font = null;
            $size = 10;
            $color = array(0,0,0);
            $word_space = 0.0;  //  default
            $char_space = 0.0;  //  default
            $angle = 0.0;   //  default
            $pdf->page_text($x, $y, $text, $font, $size, $color, $word_space, $char_space, $angle);
        }                                                                                                            
                                                                                                                                        
                        
</script>
</body>

</html>
