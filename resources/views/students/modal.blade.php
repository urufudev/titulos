
<div class="modal fade text-left" id="modal-delete-{{$student->id}}" tabindex="-1" role="dialog"
                    aria-labelledby="myModalLabel120" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="text-bold-600 " id="myModalLabel120">Cambiar Estado</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="bx bx-x"></i>
                          </button>
                        </div>
                        <div class="modal-body">
                            <h6>Confirme si desea cambiar el estado.</h6>
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-secondary btn-svgs btn-svg-white">
                                <svg class="svg-icon" fill="white" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><rect fill="none" height="24" width="24"/><path d="M5,5v14h14V5H5z M17,15.59L15.59,17L12,13.41L8.41,17L7,15.59L10.59,12L7,8.41L8.41,7L12,10.59L15.59,7 L17,8.41L13.41,12L17,15.59z" opacity=".3"/><path d="M19,19H5V5h14V19z M3,3v18h18V3H3z M17,15.59L15.59,17L12,13.41L8.41,17L7,15.59L10.59,12L7,8.41L8.41,7L12,10.59L15.59,7 L17,8.41L13.41,12L17,15.59z"/></svg>
                                <span class="btn-svg-text">Cancelar</span>
                            </button>
                            <button wire:click="destroy({{$student->id}})"  class="btn btn-danger btn-svgs btn-svg-white">
                                <svg class="svg-icon" fill="white" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19.77 4.93l1.4 1.4L8.43 19.07l-5.6-5.6 1.4-1.4 4.2 4.2L19.77 4.93m0-2.83L8.43 13.44l-4.2-4.2L0 13.47l8.43 8.43L24 6.33 19.77 2.1z"/></svg>
                                <span class="btn-svg-text">Aceptar</span>
                            </button> 
                        </div>
                      </div>
                    </div>
                  </div>