<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
//use App\User;
//use App\Post;

class SearcherController extends Controller
{
    //

    function index() //should show as lsapp.test/search
    {
     return view('search');
    }


    function action(Request $request)
    {

            if($request->ajax())
            {
            $output = '';
            $query = $request->get('query'); //from input

            if($query != '') //if not empty/blank   //this if function, gives info to $data
            {
            $data = DB::table('posts')
                ->where('title', 'like', '%'.$query.'%') //name //if query looks like name
                ->orWhere('body', 'like', '%'.$query.'%') //number
                ->get();
            }
            else //ifempty show all
            {
            $data = DB::table('posts')
                ->orderBy('title', 'asc')
                ->get();
            }

      $total_row = $data->count(); //new variable $total_row has the countnumbers of $data which are all of contacts

            if($total_row > 0) //if there is a contact,
            {
                foreach($data as $row) //for every contact, show a horizontal row with their info in td
                {
                    $output .= '
                    <tr>
                        <td>'.$row->title.'</td>
                        <td>'.$row->body.'</td>
                    </tr>
                    ';
                }
            }
            else
                {
                //set value of variable output
                $output = '
                            <tr>
                                <td align="center" colspan="5">No Data Found</td>
                            </tr>
                            ';
                }

      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }

    //
    //return view('search');


    }//end of function:action

}//end of SearcherController
