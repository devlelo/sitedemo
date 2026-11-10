<?php
namespace App\Http\Controllers;
use App\Models\CommercialProposal;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
class DocumentController extends Controller {
 public function proposal(Request $request, CommercialProposal $proposal) {
  $proposal->load(['request.customer','lines']);
  abort_unless($request->user()->isStaff() || $proposal->request->customer_id===$request->user()->id,404);
  abort_unless(in_array($proposal->status,['sent','customer_accepted','superseded'],true),404);
  return Pdf::loadView('documents.proposal',compact('proposal'))->setPaper('a4')->download('GPM-'.$proposal->request->reference.'-proposta-v'.$proposal->version.'.pdf');
 }
}
