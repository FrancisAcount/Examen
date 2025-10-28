import { Injectable } from '@angular/core';

import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';

export class empleado {
   id?: number;
  nombre: string;
  apellido: string;
  correo: string;
  salario: number;
@Injectable({providedIn: 'root'
})
export class EmpleadosService {
  private api = 'http://127.0.0.1:8000/api/empleados';

  constructor(private http: HttpClient) {}

  listar(): Observable<Empleado[]> {
    return this.http.get<Empleado[]>(this.api);
  }
   crear(empleado: Empleado): Observable<Empleado> {
    return this.http.post<Empleado>(this.api, empleado);
  }

}
