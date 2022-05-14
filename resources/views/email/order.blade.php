<div>
    <table align="center" style="font-weight:normal;border-collapse:collapse;border:0;margin-left:auto;margin-right:auto;padding:0;font-family:Arial,sans-serif;color:#555559;background-color:white;font-size:16px;line-height:26px;width:600px">
        <tbody>
            <tr>
                <td
                    style="border-collapse:collapse;border:1px solid #eeeff0;margin:0;padding:0;color:#555559;font-family:Arial,sans-serif;font-size:16px;line-height:26px">
                    <table
                        style="font-weight:normal;border-collapse:collapse;border:0;margin:0;padding:0;font-family:Arial,sans-serif">
                        <tbody>
                            <tr>
                                <td colspan="4" valign="top"
                                    style="border-collapse:collapse;border:0;margin:0;padding:0;color:#555559;font-family:Arial,sans-serif;font-size:16px;line-height:26px;background-color:#fff;border-bottom:4px solid #cf9d11;text-align:center">
                                    <a href="{{route('home')}}" target="_blank">
                                        <img  src="{{ asset('imgs/logo.png') }}" alt="{{env('APP_NAME', config('app.name'))}}" style="height:100px ;">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" style="border-collapse:collapse;border:0;margin:0;padding:20px;color:#555559;font-family:Arial,sans-serif;font-size:16px;line-height:26px;vertical-align:top;background-color:white;border-top:none">
                                    <table style="font-weight:normal;border-collapse:collapse;border:0;margin:0;padding:0;font-family:Arial,sans-serif">
                                        <tbody>
                                            <tr>
                                                <td style="border-collapse:collapse;border:0;margin:0;padding:0;color:#555559;font-family:Arial,sans-serif;font-size:16px;line-height:26px">
                                                    <div>
                                                        Thank you for reaching {{config('app.app_name')}}!
                                                        <br>
                                                        <br>
                                                        We have successfully received your query. Please make sure the following details are correct.
                                                        <br>
                                                        <br>
                                                        <strong>  Paper Topic : {{$data['paper_topic']}}</strong>
                                                        <br>
                                                        <strong>  Paper Type : {{$papername}}</strong>
                                                        <br>
                                                        <strong>  Deadline : {{$data['deadline']}}</strong>
                                                        <br>
                                                        <strong>  Subject Area : {{$subjectname}}</strong>
                                                        <br>
                                                        <strong>  Number of Pages : {{$data['number_of_pages']}}</strong>
                                                        <br>
                                                        <strong>  Academic Level : {{$data['academic_level']}}</strong>
                                                        <br>
                                                        <strong>  Reference : {{$data['reference']}}</strong>
                                                        <br>
                                                        <strong>  Style : {{$stylename}}</strong>
                                                        <br>
                                                        <strong>  Cost Per Page : {{$data['cost_per_page']}}</strong>
                                                        <br>
                                                        <strong>  Total Price : {{$data['total_price']}}</strong>
                                                        <br>
                                                        <strong>  Detail : {{$data['detail']}}</strong>
                                                        <br>
                                                        <strong>  Name : {{$data['name']}}</strong>
                                                        <br>
                                                        <strong>  Email : {{$data['email']}}</strong>
                                                        <br>
                                                        <strong>  Country : {{$data['country']}}</strong>
                                                        <br>
                                                        <strong>  Phone : {{$data['phone']}}</strong>
                                                        <br>
                                                        <br>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr bgcolor="#fff" style="border-top:4px solid #cf9d11">
                                <td valign="top" style="border-collapse:collapse;border:0;margin:0;padding:0;color:#555559;font-family:Arial,sans-serif;font-size:16px;line-height:26px;background:#fff;text-align:center">
                                    <table style="font-weight:normal;border-collapse:collapse;border:0;margin:0;padding:0;font-family:Arial,sans-serif">
                                        <tbody>
                                            <tr>
                                                <td align="center" valign="middle"
                                                    style="border-collapse:collapse;border:0;margin:0;padding:20px;color:#555559;font-family:Arial,sans-serif;font-size:12px;line-height:16px;vertical-align:middle;text-align:center;width:580px">
                                                    <div>
                                                        <b>{{config('app.app_name')}}</b>
                                                        <br> © 2018 - 2022
                                                        <br>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</div>
