import math

# input for diameter
diameter = float(input("Enter the diameter of the circle: "))

# for radius
radius = diameter / 2

# for area
area = math.pi * radius ** 2

# for circumference
circumference = 2 * math.pi * radius

# Print part
print("The area of the circle is:", area)
print("The circumference of the circle is:", circumference)
