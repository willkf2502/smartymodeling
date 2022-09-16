
import { Component, OnInit } from '@angular/core';
import * as jQuery from 'jquery';
import * as _ from 'lodash';
import * as $ from 'backbone';


@Component({
  selector: 'app-draw-papper',
  templateUrl: './draw-papper.component.html',
  styleUrls: ['./draw-papper.component.css']
})
export class DrawPapperComponent implements OnInit {

  constructor() { }


  
  ngOnInit(): void {

    //INCIALIZA O EXEMPLO
    function start(){
        //@ts-ignore
        const joint = require('../../../../src/instances/smarty-jointjs/js/smarty-joint.js');
            
        var graph = new joint.dia.Graph();

        new joint.dia.Paper({
            el: document.getElementById('paper'),
            gridSize: 0.5,
            model: graph
        });

        var uml = joint.shapes.uml;

        

        //CLASSES UML
        var classes = {

            
            mammals: new uml.Interface({
                position: { x:600  , y: 50 },
                size: { width: 240, height: 100 },
                name: 'Specie',
                attributes: ['dob: Date'],
                methods: ['+ setDateOfBirth(dob: Date): Void','+ getAgeAsDays(): Numeric'],
                attrs: {
                    '.uml-class-name-rect': {
                        fill: '#feffe0',
                        stroke: '#000000',
                        'stroke-width': 0.5
                    },
                    '.uml-class-attrs-rect': {
                        fill: '#feffe0',
                        stroke: '#000000',
                        'stroke-width': 0.5
                    },
                    '.uml-class-methods-rect': {
                        fill: '#feffe0',
                        stroke: '#000000',
                        'stroke-width': 0.5
                    },
                    '.uml-class-attrs-text': {
                        ref: '.uml-class-attrs-rect',
                        'ref-y': 0.5,
                        'y-alignment': 'middle'
                    },
                    '.uml-class-methods-text': {
                        ref: '.uml-class-methods-rect',
                        'ref-y': 0.5,
                        'y-alignment': 'middle'
                    }

                }
            }),

            mammal: new uml.Mandatory({
                position: { x:300  , y: 50 },
                size: { width: 240, height: 100 },
                name: 'Mammal',
                attributes: ['dob: Date'],
                methods: ['+ setDateOfBirth(dob: Date): Void','+ getAgeAsDays(): Numeric'],
                attrs: {
                    '.uml-class-name-rect': {
                        fill: '#feffe0',
                        stroke: '#000000',
                        'stroke-width': 0.5
                    },
                    '.uml-class-attrs-rect': {
                        fill: '#feffe0',
                        stroke: '#000000',
                        'stroke-width': 0.5
                    },
                    '.uml-class-methods-rect': {
                        fill: '#feffe0',
                        stroke: '#000000',
                        'stroke-width': 0.5
                    },
                    '.uml-class-attrs-text': {
                        ref: '.uml-class-attrs-rect',
                        'ref-y': 0.5,
                        'y-alignment': 'middle'
                    },
                    '.uml-class-methods-text': {
                        ref: '.uml-class-methods-rect',
                        'ref-y': 0.5,
                        'y-alignment': 'middle'
                    }

                }
            }),

            person: new uml.Abstract({
                position: { x:300  , y: 300 },
                size: { width: 260, height: 100 },
                name: 'Persons',
                attributes: ['firstName: String','lastName: String'],
                methods: ['+ setName(first: String, last: String): Void','+ getName(): String'],
                attrs: {
                    '.uml-class-name-rect': {
                        stroke: '#000000',
                        fill: '#feffe0',
                        'stroke-width': 0.5
                    },
                    '.uml-class-attrs-rect': {
                        stroke: '#000000',
                        fill: '#feffe0',
                        'stroke-width': 0.5
                    },
                    '.uml-class-methods-rect': {
                        stroke: '#000000',
                        fill: '#feffe0',
                        'stroke-width': 0.5
                    },
                    '.uml-class-methods-text, .uml-class-attrs-text': {
                        fill: '#fff'
                    }
                }
            }),

            bloodgroup: new uml.Class({
                position: { x:20  , y: 190 },
                size: { width: 220, height: 100 },
                name: 'BloodGroup',
                attributes: ['bloodGroup: String'],
                methods: ['+ isCompatible(bG: String): Boolean'],
                attrs: {
                    '.uml-class-name-rect': {
                        fill: '#feffe0',
                        stroke: '#000000',
                        'stroke-width': 0.5,
                    },
                    '.uml-class-attrs-rect': {
                        fill: '#feffe0',
                        stroke: '#000000',
                        'stroke-width': 0.5
                    },
                    '.uml-class-methods-rect': {
                        fill: '#feffe0',
                        stroke: '#000000',
                        'stroke-width': 0.5
                    },
                    '.uml-class-attrs-text': {
                        ref: '.uml-class-attrs-rect',
                        'ref-y': 0.5,
                        'y-alignment': 'middle'
                    },
                    '.uml-class-methods-text': {
                        ref: '.uml-class-methods-rect',
                        'ref-y': 0.5,
                        'y-alignment': 'middle'
                    }
                }
            }),

            address: new uml.Class({
                position: { x:630  , y: 190 },
                size: { width: 160, height: 100 },
                name: 'Address',
                attributes: ['houseNumber: Integer','streetName: String','town: String','postcode: String'],
                methods: [],
                attrs: {
                    '.uml-class-name-rect': {
                        fill: '#feffe0',
                        stroke: '#000000',
                        'stroke-width': 0.5
                    },
                    '.uml-class-attrs-rect': {
                        fill: '#feffe0',
                        stroke: '#000000',
                        'stroke-width': 0.5
                    },
                    '.uml-class-methods-rect': {
                        fill: '#feffe0',
                        stroke: '#000000',
                        'stroke-width': 0.5
                    },
                    '.uml-class-attrs-text': {
                        'ref-y': 0.5,
                        'y-alignment': 'middle'
                    }
                }

            }),

            man: new uml.Class({
                position: { x:200  , y: 500 },
                size: { width: 180, height: 50 },
                name: 'Man<<mandatory>>',
                attrs: {
                    '.uml-class-name-rect': {
                        fill: '#feffe0',
                        stroke: '#000000',
                        'stroke-width': 0.5
                    },
                    '.uml-class-attrs-rect': {
                        fill: '#feffe0',
                        stroke: '#000000',
                        'stroke-width': 0.5
                    },
                    '.uml-class-methods-rect': {
                        fill: '#feffe0',
                        stroke: '#000000',
                        'stroke-width': 0.5
                    }
                }
            }),

            woman: new uml.Class({
                position: { x:450  , y: 500 },
                size: { width: 180, height: 50 },
                name: 'Woman',
                methods: ['+ giveABrith(): Person []'],
                attrs: {
                    '.uml-class-name-rect': {
                        fill: '#feffe0',
                        stroke: '#000000',
                        'stroke-width': 0.5
                    },
                    '.uml-class-attrs-rect': {
                        fill: '#feffe0',
                        stroke: '#000000',
                        'stroke-width': 0.5
                    },
                    '.uml-class-methods-rect': {
                        fill: '#feffe0',
                        stroke: '#000000',
                        'stroke-width': 0.5
                    },
                    '.uml-class-methods-text': {
                        'ref-y': 0.5,
                        'y-alignment': 'middle'
                    }
                }
            })

        };    

        classes.woman.name = "Mulher";

        //RELACIONAMENTOS
        var relations = [
            new uml.Implementation({ source: { id: classes.mammal.id }, target: { id: classes.mammals.id }}),
            new uml.Generalization({ source: { id: classes.man.id }, target: { id: classes.person.id }}),
            new uml.Transition({ source: { id: classes.woman.id }, target: { id: classes.person.id }}),
            new uml.Association({ source: { id: classes.person.id }, target: { id: classes.mammal.id }}),
            new uml.Aggregation({ source: { id: classes.person.id }, target: { id: classes.address.id }}),
            new uml.Composition({ source: { id: classes.person.id }, target: { id: classes.bloodgroup.id }})
        ];   

        //RENDERIZA AS CLASSES
        Object.keys(classes).forEach(function(key) {      
            //@ts-ignore
            graph.addCell(classes[key]);
        });

        //RENDERIZA RELACIONAMENTOS    
        Object.keys(relations).forEach(function(key) {      
            //@ts-ignore  
            graph.addCell(relations[key]);
        });

    }

    start();
    
    
  }

}
