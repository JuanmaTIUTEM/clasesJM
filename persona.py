class Persona:
    def __init__(self, nombre, edad, telefono):
        self.nombre = nombre
        self.edad = edad
        self.telefono = telefono

# Crear objetos de la clase Persona
persona1 = Persona("Alice", 30, 3141234567)
persona2 = Persona("Bob", 25, 3121234567)

# Mostrar los atributos de los objetos
print(persona1.nombre, persona1.edad, persona1.telefono)
print(persona2.nombre, persona2.edad, persona2.telefono)