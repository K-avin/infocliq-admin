<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function addTicket()
    {
        return view('Admin/Ticket/addticket');
    }
    public function showTickets()
    {
        return view('Admin/Ticket/addticket');
    }
}
