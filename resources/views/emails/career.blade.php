@extends('layouts.email')


@section('email-content')

<tr>
    <td class="wrapper">
        <table role="presentation" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td>
                    <p>Hi there,</p>
                    <p>{{ $applicantResume->name }}, submitted a resume from career page. Here is the information he has submitted. Please take a look and reply accordingly.</p>
                    <hr/>
                    <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="btn btn-primary">
                        <tbody>
                            <tr>
                                <td>Name</td>
                                <td>{{ $applicantResume->name }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{ $applicantResume->email }}</td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td>{{ $applicantResume->phone }}</td>
                            </tr>
                            <tr>
                                <td>Position</td>
                                <td>{{ $applicantResume->position }}</td>
                            </tr>
                            <tr>
                                <td>Message</td>
                                <td>{{ $applicantResume->position }}</td>
                            </tr>
                            <tr>
                                <td>Resume</td>
                                <td>
                                    <a href="{{ asset('storage/resumes/'.$applicantResume->resume) }}" download>Download</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <hr/>
                    <p>Good luck!</p>
                </td>
            </tr>
        </table>
    </td>
</tr>
@endsection
