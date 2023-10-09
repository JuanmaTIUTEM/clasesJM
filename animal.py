class Animal:
    def __init__(self, nombre):
        self.nombre = nombre

    def hablar(self):
        pass

class Perro(Animal):
    def hablar(self):
        return "Guau"

class Gato(Animal):
    def hablar(self):
        return "Miau"

perro = Perro("Fido")
gato = Gato("Whiskers")

print(perro.nombre, "dice:", perro.hablar())
print(gato.nombre, "dice:", gato.hablar())